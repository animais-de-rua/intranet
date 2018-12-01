<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\Permissions;
use App\Http\Requests\TreatmentRequest as StoreRequest;
use App\Http\Requests\TreatmentRequest as UpdateRequest;
use App\User;
use App\Models\Process;
use App\Models\Treatment;
use Carbon\Carbon;

/**
 * Class TreatmentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TreatmentCrudController extends CrudController
{
    use Permissions;

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Treatment');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/treatment');
        $this->crud->setEntityNameStrings(__('treatment'), __('treatments'));

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->setColumns(['process', 'treatment_type', 'vet', 'affected_animals', 'affected_animals_new', 'expense', 'date', 'user_id']);

        $this->crud->setColumnDetails('process', [
            'name' => 'process',
            'label' => ucfirst(__('process')),
            'type' => 'model_function',
            'limit' => 120,
            'function_name' => 'getProcessLinkAttribute',
        ]);

        $this->crud->setColumnDetails('treatment_type', [
            'label' => ucfirst(__('treatment type')),
            'type' => 'select',
            'name' => 'treatment_type_id',
            'entity' => 'treatment_type',
            'attribute' => 'name',
            'model' => "App\Models\TreatmentType",
        ]);

        $this->crud->setColumnDetails('vet', [
            'name' => 'vet',
            'label' => ucfirst(__('vet')),
            'type' => 'model_function',
            'limit' => 120,
            'function_name' => 'getVetLinkAttribute',
        ]);

        $this->crud->setColumnDetails('user_id', [
            'name' => 'user',
            'label' => ucfirst(__('volunteer')),
            'type' => 'model_function',
            'limit' => 120,
            'function_name' => 'getUserLinkAttribute',
        ]);

        $this->crud->setColumnDetails('affected_animals', [
            'label' => __('Animals'),
            'type' => 'number',
        ]);

        $this->crud->setColumnDetails('affected_animals_new', [
            'label' => __('Animals') . " (" . __('new') . ")",
            'type' => 'number',
        ]);

        $this->crud->setColumnDetails('expense', [
            'label' => __('Expense'),
            'suffix' => '€',
        ]);

        $this->crud->setColumnDetails('date', [
            'label' => __('Date'),
            'type' => 'date',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'label' => ucfirst(__('process')),
            'name' => 'process_id',
            'type' => 'select2_from_ajax',
            'entity' => 'process',
            'attribute' => 'detail',
            'model' => '\App\Models\Process',
            'data_source' => url('admin/process/ajax/search'),
            'placeholder' => __('Select a process'),
            'minimum_input_length' => 2,
            'default' => \Request::has('process') ?? false,
        ]);

        $this->crud->addField([
            'label' => ucfirst(__('treatment type')),
            'type' => 'select2',
            'name' => 'treatment_type_id',
            'entity' => 'treatment_type',
            'attribute' => 'name',
            'model' => "App\Models\TreatmentType",
        ]);

        $this->crud->addField([
            'label' => ucfirst(__('vet')),
            'name' => 'vet_id',
            'type' => 'select2_from_ajax',
            'entity' => 'vet',
            'attribute' => 'name',
            'model' => '\App\Models\Vet',
            'data_source' => url('admin/vet/ajax/search'),
            'placeholder' => __('Select a vet'),
            'minimum_input_length' => 2,
            'default' => \Request::has('vet') ?? false,
        ]);

        // Animals
        $treatment = $this->crud->model;
        $process = $treatment->process()->getRelated()->first();

        $total_animals = $process->amount;
        $total_affected_animals_new = $treatment->getAffectedAnimalsNew($process->id);
        $max = $total_animals - $total_affected_animals_new;

        $this->crud->addField([
            'label' => __('Affected Animals'),
            'name' => 'affected_animals',
            'type' => 'number',
            'default' => 1,
            'attributes' => ['min' => 1, 'max' => $total_animals],
        ]);

        $this->crud->addField([
            'label' => __('New affected Animals') . "<br />".
                "<i>Assinalar apenas os animais que nunca tenham sido intervencionados.</i><br />".
                "<i>O processo tem <b style='font-style:initial'>$total_animals</b> animais dos quais <b style='font-style:initial'>$total_affected_animals_new</b> já foram intervencionados.</i>",
            'name' => 'affected_animals_new',
            'type' => 'number',
            'default' => 0,
            'attributes' => ['min' => 0, 'max' => $max],
        ]);

        $this->crud->addField([
            'label' => __('Expense'),
            'name' => 'expense',
            'type' => 'number',
            'default' => 0,
            'attributes' => ['min' => 0, 'max' => 1000000],
            'prefix' => '€',
        ]);

        $this->crud->addField([
            'label' => __('Date'),
            'name' => 'date',
            'type' => 'date',
            'default' => Carbon::today()->toDateString(),
        ]);

        $this->crud->addField([
            'label' => ucfirst(__('volunteer')),
            'name' => 'user_id',
            'type' => 'select2_from_ajax',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => '\App\User',
            'placeholder' => '',
            'minimum_input_length' => 2,
            'data_source' => null,
            'attributes' => [
                'readonly' => 'readonly',
            ],
        ]);

        // Filter
        $this->crud->addFilter([
            'name' => 'process',
            'type' => 'select2_ajax',
            'label' => ucfirst(__('process')),
            'placeholder' => __('Select a process'),
        ],
            url('admin/process/ajax/filter'),
            function ($value) {
                $this->crud->addClause('where', 'process_id', $value);
            });

        $this->crud->addFilter([
            'name' => 'treatment_type_id',
            'type' => 'select2_multiple',
            'label' => ucfirst(__('treatment type')),
            'placeholder' => __('Select a treatment type'),
        ],
            $this->wantsJSON() ? null : api()->treatmentTypeList(),
            function ($values) {
                $this->crud->addClause('whereIn', 'treatment_type_id', json_decode($values));
            });

        $this->crud->addFilter([
            'name' => 'vet',
            'type' => 'select2_ajax',
            'label' => ucfirst(__('vet')),
            'placeholder' => __('Select a vet'),
        ],
            url('admin/vet/ajax/filter'),
            function ($value) {
                $this->crud->addClause('where', 'vet_id', $value);
            });

        $this->crud->addFilter([
            'name' => 'user',
            'type' => 'select2_ajax',
            'label' => ucfirst(__('volunteer')),
            'placeholder' => __('Select a volunteer'),
        ],
            url('admin/user/ajax/filter/' . User::VOLUNTEER),
            function ($value) {
                $this->crud->addClause('where', 'user_id', $value);
            });

        $this->crud->addFilter([
            'name' => 'expense',
            'type' => 'range',
            'label' => __('Expense') . ' €',
            'label_from' => __('Min value'),
            'label_to' => __('Max value'),
        ],
            true,
            function ($value) {
                $range = json_decode($value);

                if (is_numeric($range->from)) {
                    $this->crud->addClause('where', 'expense', '>=', $range->from);
                }

                if (is_numeric($range->to)) {
                    $this->crud->addClause('where', 'expense', '<=', $range->from);
                }

            });

        $this->crud->addFilter([
            'type' => 'date_range',
            'name' => 'from_to',
            'label' => __('Date range'),
            'format' => 'DD/MM/YYYY',
            'firstDay' => 1,
        ],
            false,
            function ($value) {
                $dates = json_decode($value);
                $this->crud->query->whereRaw('date >= ? AND date <= DATE_ADD(?, INTERVAL 1 DAY)', [$dates->from, $dates->to]);
            });

        // ------ DATATABLE EXPORT BUTTONS
        $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        $this->crud->query->with(['process', 'vet', 'user', 'treatment_type']);

        // add asterisk for fields that are required in TreatmentRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // Add user
        $request->merge(['user_id' => backpack_user()->id]);

        return parent::storeCrud($request);
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud($request);
    }
}
