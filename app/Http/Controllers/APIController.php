<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\Traits\LocalCache;
use Config;

class APIController extends Controller
{

    public function getToken()
    {
        return [
            'token' => csrf_token(),
        ];
    }

    public function getStats()
    {
        $treated = LocalCache::treated();
        $adopted = LocalCache::adopted();
        $base_counter = Config::get('settings.base_counter', 0);

        return [
            'animals' => [
                'helped' => $base_counter + $treated + $adopted,
                'treated' => intval($treated),
                'adopted' => intval($adopted),
            ],
        ];
    }

    public function getHeadquarters()
    {
        $headquarters = LocalCache::headquarters();
        $headquarters_territories_acting = LocalCache::headquarters_territories_acting();

        return [
            'headquarters' => $headquarters,
            'territories' => $headquarters_territories_acting,
        ];
    }

    public function getCampaigns()
    {
        $campaigns = LocalCache::campaigns()->toArray();

        foreach ($campaigns as &$campaign) {
            $campaign['image'] = url('uploads/' . $campaign['image']);
        }

        return [
            'campaigns' => $campaigns,
        ];
    }

    public function getProducts()
    {
        $products = LocalCache::products();

        return [
            'products' => $products,
        ];
    }

    public function getSponsors()
    {
        $sponsors = LocalCache::sponsors()->toArray();

        foreach ($sponsors as &$sponsor) {
            $sponsor['image'] = url('uploads/' . $sponsor['image']);
        }

        return [
            'sponsors' => $sponsors,
        ];
    }

    public function getPartners()
    {
        $partners = LocalCache::partners();
        $partners_categories = LocalCache::partners_categories();
        $partners_territories = LocalCache::partners_territories();

        return [
            'partners' => $partners,
            'categories' => $partners_categories,
            'territories' => $partners_territories,
        ];
    }

    public function getFriendCard()
    {
        $friend_card_modalities = LocalCache::friend_card_modalities();

        return [
            'modalities' => $friend_card_modalities,
        ];
    }

    public function getHelp()
    {
        $processes_urgent = LocalCache::processes_urgent();

        return [
            'processes' => $processes_urgent,
        ];
    }
}
