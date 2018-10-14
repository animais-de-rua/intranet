<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners_categories')->truncate();
        DB::table('partners_territories')->truncate();
        DB::table('partner_category_list')->truncate();
        DB::table('partners')->truncate();

        $date = Carbon::now();

        $categories = [
            ['Alimentação', 'Aqui pode encontrar os descontos dos nossos aderentes em alimentação vegetariana e vegana. Seja em restaurante, take away ou em entrega ao domicílio, basta escolher o que mais lhe convém. Pode ainda iniciar o cultivo dos seus próprios produtos hortícolas ou adquirir produtos saudáveis para cozinhar em casa.'],
            ['Agricultura Biológica', 'Aqui encontrará tudo o que precisa para cultivar os seus legumes e frutas de forma biológica e sustentável e com descontos de amigo!'],
            ['Animais', 'Aqui pode encontrar descontos nos mais variados serviços destinados aos nossos amigos cães e gatos, desde pet sitting, treino canino, hotel, tosquias, assistência veterinária e artigos para animais.'],
            ['Apoio no Estudo', 'Apoie a sua família a obter os melhores resultados escolares e sempre com os melhores descontos para amigos.'],
            ['Artesanato', 'Aqui encontrará peças únicas e originais, feitas por artesãos amigos dos animais!'],
            ['Beleza e Bem-estar', 'Produtos de beleza, massagens, prática de yoga, meditação e Reiki, e muito mais, mas tudo com desconto porque é nosso amigo.'],
            ['Desporto e Lazer', 'Aqui pode encontrar descontos na gestão, manutenção e aquisição de material desportivo.'],
            ['Fotografia e Vídeo', 'Conheça os aderentes que lhe oferecem descontos em diferentes serviços de imagem.'],
            ['Joalharia e Bijuteria', 'Aqui encontra peças especiais, para si ou para oferecer a quem ama, com descontos simpáticos que ajudam os animais.'],
            ['Livros e Música', 'Livros, CDs e DVDs com descontos de amigo.'],
            ['Lojas Online', 'Nesta página poderá ver todos os parceiros que têm lojas online, com distribuição nacional ou regional.'],
            ['Museus e Exposições', 'A cultura e o saber também nos oferecem descontos.'],
            ['Projectos e Consultoria', 'Encontre harmonia e graciosidade para o seu espaço ou as melhores ideias para o seu negócio com descontos e ideias que agradarão a todos.​​'],
            ['Saúde', 'Porque queremos que os nossos amigos tenham uma saúde de ferro, temos para lhe oferecer descontos em produtos e serviços que cuidam de si quando mais precisa.'],
            ['Serviços e Reparações para o Lar', 'O seu Lar merece o melhor e nós ainda ajudamos com descontos.'],
            ['Vestuário, Calçado e Acessórios', 'Aproveite os descontos em roupa e calçado confortáveis que estão na moda e não usam produtos de origem animal.'],
            ['Viagens e Turismo', 'Aproveite os descontos destes espaços amigos do ambiente, descanse e divirta-se em boa companhia.']
        ];

        $partners = [
            [
                'name' => 'A Cozinha Verde',
                'image' => 'partners/cozinhaverde.jpg',
                'email' => 'acozinhaverde@gmail.com',
                'phone1' => '911 900 522',
                'url' => 'acozinhaverde.blogspot.pt',
                'benefit' => '10% nos workshops/cursos de cozinha da A Cozinha Verde e um desconto de 10% em encomendas de refeições vegan de valor igual ou superior a 25€'
            ],
            [
                'name' => 'A Pet\'s Dream',
                'image' => 'partners/apetsdream.jpg',
                'email' => 'apetsdream@gmail.com',
                'phone1' => '919 691 397',
                'url' => 'http://apetsdream.wix.com/apetsdream',
                'benefit' => '20% em todos os serviços, excepto alojamento'
            ],
            [
                'name' => 'A. Saint Maurice ',
                'image' => 'partners/asaintmaurice.jpg',
                'email' => 'info@biofunny.com',
                'phone1' => '925 873 596',
                'address' => 'R. Miguel Bombarda, 23 - 2600-194 Vila Franca de Xira',
                'url' => 'http://biofunny.com',
                'benefit' => '20% na loja fisica e na loja online'
            ],
            [
                'name' => 'Amor e Hortelã',
                'image' => 'partners/amorehortela.jpg',
                'email' => 'amorehortela@gmail.com',
                'url' => 'http://amorehortela.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Animal Positivo',
                'image' => 'partners/animalpositivo.jpg',
                'email' => 'animalpositivo@gmail.com',
                'phone1' => '969 150 147',
                'phone1_info' => 'Ricardo Oliveira',
                'facebook' => 'https://facebook.com/animalpositivo',
                'benefit' => '15% nos serviços de treino'
            ],
            [
                'name' => 'Benditos Pormenores',
                'image' => 'partners/benditospormenores.jpg',
                'email' => 'benditospormenores@gmail.com',
                'facebook' => 'https://facebook.com/BenditosPormenores/',
                'benefit' => ' 10%'
            ],
            [
                'name' => 'Berry Dream',
                'image' => 'partners/berrydream.png',
                'email' => 'geral@berrydream.pt ',
                'phone1' => '916 076 973',
                'address' => 'Herdade do Olho de Bode, 2985-001 Canha, Montijo',
                'facebook' => 'https://www.facebook.com/Berrydream2780/',
                'url' => 'http://www.berrydream.pt/',
                'benefit' => '10%'
            ],
            [
                'name' => 'Bigodes Petcare Shop',
                'image' => 'partners/bigodes.jpg',
                'email' => 'bigodespetcareshop@gmail.com ',
                'phone1' => '229 747 270',
                'address' => 'Urbanização Mãos à Obra lote 10, 4435-318 Rio Tinto',
                'facebook' => 'https://facebook.com/bigodeshop',
                'benefit' => '15% Rações, Snacks, Desparasitantes e Acessórios; 10% Banhos & Tosquias; 10% Petsittin'
            ],
            [
                'name' => 'Bio em Casa',
                'image' => 'partners/biocasa.jpg',
                'email' => 'geral@bioemcasa.com',
                'phone1' => '931 158 428',
                'address' => 'Rua do Campo Lindo 273, 4200-145 Porto',
                'url' => 'http://bioemcasa.com/',
                'benefit' => '5%'
            ],
            [
                'name' => 'Biofolha',
                'image' => 'partners/biofolha.jpg',
                'email' => 'biofolha@hotmail.com',
                'phone1' => '289 502 076',
                'phone2' => '939 230 615',
                'address' => 'Avenida De Ceuta, Edifício SolBelo - Loja. 5 - 8125-116, Quarteira',
                'facebook' => 'https://facebook.com/pages/BioFolha/125002800852453',
                'benefit' => '10%'
            ],
            [
                'name' => 'Célia Lopes - Fotografia',
                'image' => 'partners/celialopes.jpg',
                'email' => 'celialopesfotografa@gmail.com',
                'address' => 'Venda do Pinheiro, Lisboa',
                'facebook' => 'https://facebook.com/celialopesfotografia',
                'benefit' => '15%'
            ],
            [
                'name' => 'Centro de Bem Estar Animal',
                'image' => 'partners/centrobemestar.jpg',
                'email' => 'caesegatos@centrobemestaranimal.pt',
                'phone1' => '917 566 528',
                'phone2' => '220 998 895',
                'phone2_info' => 'Loja',
                'address' => 'Rua Manuel Pinto de Azevedo n118 - 4100-320 Porto - Hotel: Travessa do Bairro n618 - 4475-113 Castêlo da Maia',
                'address_info' => 'Loja',
                'url' => 'http://centrobemestaranimal.pt/',
                'benefit' => '15% (banhos, tosquias, atl, hotel e em todos os produtos excepto alimentação húmida)'
            ],
            [
                'name' => 'Clínica Veterinária Arca d\' Água',
                'image' => 'partners/clinicaarcadagua.png',
                'email' => 'cvarcadagua@gmail.com',
                'phone1' => '224 967 590',
                'address' => 'Rua Vale Formoso, n625 - 4200-514, Porto',
                'facebook' => 'https://www.facebook.com/Cl%C3%ADnica-Veterin%C3%A1ria-Arca-d-%C3%81gua-439266219445111',
                'benefit' => '10 ou 15% consoante os serviços'
            ],
            [
                'name' => 'Clínica Veterinária Dr. André Vieira',
                'image' => 'partners/clinicaandrevieira.jpg',
                'email' => 'andrevieiracvet@gmail.com',
                'phone1' => '228 305 067',
                'address' => 'Rua Central de Francos, 533 - Porto',
                'facebook' => 'https://www.facebook.com/Cl%C3%ADnica-Veterin%C3%A1ria-DrAndr%C3%A9-Vieira-288325531298084',
                'benefit' => '15%'
            ],
            [
                'name' => 'Clínica Veterinária Monte dos Burgos',
                'image' => 'partners/clinicamonteburgos.jpg',
                'email' => 'geral@clivetmontesburgos.com',
                'phone1' => '228331423',
                'phone2' => '916306636',
                'phone2_info' => 'Urgências 24h',
                'address' => 'Rua Monte dos Burgos, n259 - 4250-316, Porto',
                'url' => 'http://www.clinica-montes-burgos.com',
                'benefit' => '20% em todos os serviços da clínica e hotel e 10% em todos os artigos.'
            ],
            [
                'name' => 'Dirty Dog Shop',
                'image' => 'partners/dirtydog.jpg',
                'email' => 'info@dirtydog.pt',
                'phone1' => '234 095 077',
                'phone2' => '934 594 426',
                'address' => 'Rua de Anadia n14 - 3810-208, Aveiro',
                'url' => 'http://www.dirtydog.pt/',
                'benefit' => '5%'
            ],
            [
                'name' => 'Duas de Letra',
                'image' => 'partners/duasletra.jpg',
                'email' => 'duasdeletra@gmail.com',
                'phone1' => '225 360 333',
                'address' => 'Passeio de Sao Lazaro, 48 - 4000-508, Porto',
                'url' => 'http://www.duasdeletra.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Efeito Verde',
                'image' => 'partners/efeitoverde.jpg',
                'email' => 'ev@efeitoverde.com',
                'phone1' => '964 671 561',
                'address' => 'Oliveira do Hospital',
                'url' => 'http://www.efeitoverde.com',
                'benefit' => '8% de desconto em todas as encomendas feitas online na Efeito Verde: 5% de imediato, 3% descontados na encomenda seguinte (5+3=8%), se realizada no prazo de 90 dias. Este desconto é acumulável com outras promoções em vigor.'
            ],
            [
                'name' => 'Espiral',
                'image' => 'partners/espiral.jpg',
                'email' => 'espiral.centro.alternativas@gmail.com',
                'phone1' => '214 094 487',
                'phone2' => '966 605 625',
                'address' => 'Praça Ilha do Faial, n14 A - 1000-168 Lisboa',
                'url' => 'http://www.espiral.pt',
                'benefit' => '10%'
            ],
            [
                'name' => 'Farmácia Progresso',
                'image' => 'partners/farmaciaprogresso.jpg',
                'benefit' => '5% em medicamentos Sujeitos a Receita Médica, 10% DESCONTO* nos restantes artigos da Farmácia. *excepto medicamentos com PVP superior a 50€, protocolo de diabetes, nutrição Infantil e fraldas.'
            ],
            [
                'name' => 'Habitat Saudável',
                'image' => 'partners/habitatsaudavel.jpg',
                'email' => 'info@habitatsaudavel.com ',
                'phone1' => '223 249 100',
                'phone2' => '933 719 477 - 934 444 167',
                'address' => 'Rua Engenheiro Ferreira Dias, 161 4100 - 247 Porto',
                'facebook' => 'https://www.facebook.com/habitatsaudavel/',
                'url' => 'http://www.habitatsaudavel.com/',
                'benefit' => '10%'
            ],
            [
                'name' => 'Hotel Campanile Setúbal',
                'image' => 'partners/campanile.jpg',
                'email' => 'setubal@campanile.com',
                'phone1' => '265 720 490',
                'address' => 'Rua das Caravelas - 2910-279 Setúbal',
                'url' => 'http://www.campanile-setubal.com.pt/en',
                'benefit' => '15%'
            ],
            [
                'name' => 'Hotel para Gatos',
                'image' => 'partners/hotelgatos.jpg',
                'email' => 'hotelparagatos@outlook.com',
                'phone1' => '917 694 242',
                'address' => 'Rua Nova da Bouça, n345 - 4415-497 Grijó',
                'url' => 'http://www.hotel-para-gatos.com',
                'benefit' => '15%'
            ],
            [
                'name' => 'House of Pets',
                'image' => 'partners/housepets.jpg',
                'email' => 'houseofpets.hotelescolacanina@gmail.com',
                'phone1' => '918 131 761',
                'address' => 'Rua das Hortas, n370 - 4415-655 Lever - Vila Nova de Gaia',
                'facebook' => 'https://www.facebook.com/houseofpets.gaia',
                'benefit' => '15%'
            ],
            [
                'name' => 'Instituto do Animal',
                'image' => 'partners/institutoanimal.jpg',
                'email' => 'email@institutodoanimal.pt',
                'phone1' => '218 680 421',
                'phone2' => '914 310 043',
                'address' => 'Praça David Leandro Silva, n24, Jardim do Poço do Bispo - 1950-064 Lisboa',
                'url' => 'http://institutodoanimal.pt/',
                'benefit' => 'Formação (curta duração): 15% | Socialização (treino de obediência em grupo, 3 ou mais cães): 15% | Creche canina: Isenção de matrícula'
            ],
            [
                'name' => 'It\'s All About Dogs',
                'image' => 'partners/itsallaboutdogs.jpg',
                'email' => 'itsallaboutdogs@hotmail.com',
                'phone1' => '919 143 358',
                'url' => 'http://www.itsallaboutdogs.org',
                'benefit' => '15% apenas nas aulas, em pacotes de 8'
            ],
            [
                'name' => 'Joana Ribeiro Joalharia',
                'image' => 'partners/joanaribeiro.jpg',
                'email' => 'designer@joanaribeirojoalharia.pt',
                'phone1' => '917 763 665',
                'address' => 'Stand - NorteShopping - 1.º Piso',
                'address' => 'Em frente à H&M',
                'url' => 'http://www.joanaribeirojoalharia.pt/',
                'benefit' => '5% (em compras no stand)'
            ],
            [
                'name' => 'Just Granola',
                'image' => 'partners/justgranola.jpg',
                'email' => 'justgranola.shop@gmail.com',
                'url' => 'http://justnaturalplease.wix.com/justgranola-shop',
                'benefit' => '15%'
            ],
            [
                'name' => 'La Paz',
                'image' => 'partners/lapaz.png',
                'email' => 'info@lapaz.pt',
                'phone1' => '222 025 037',
                'address' => 'Rua da Reboleira, 23 - 4050-492 Porto',
                'url' => 'http://lapaz.pt/',
                'benefit' => '20%'
            ],
            [
                'name' => 'Lands - Turismo na Natureza',
                'image' => 'partners/lands.jpg',
                'email' => 'mail@lands.pt',
                'phone1' => '289 817 466',
                'phone2' => '914 539 511',
                'address' => 'Edifício Ginásio Clube Naval – Piso 0 - Doca de Recreio de Faro - 8000-541 Faro',
                'url' => 'http://www.lands.pt',
                'benefit' => '15%'
            ],
            [
                'name' => 'Life In a Bag',
                'image' => 'partners/lifeinabag.jpg',
                'email' => 'info@lifeinabag.pt',
                'phone1' => '965 735 678',
                'url' => 'http://www.lifeinabag.pt/pt/',
                'benefit' => '15% em compras de valor igual ou superior a 9€'
            ],
            [
                'name' => 'Mercearia Natural',
                'image' => 'partners/mercearianatural.jpg',
                'email' => 'mercearianatural@aeiou.pt',
                'phone1' => '219 212 232',
                'address' => 'Rua Augusto Fraga 10 - B, Algueirão, 2725-589 Lisboa',
                'facebook' => 'https://www.facebook.com/MerceariaNaturalLda/?fref=ts',
                'benefit' => '15%'
            ],
            [
                'name' => 'Moon Pet Care',
                'image' => 'partners/moonpetcare.jpg',
                'email' => 'moonpetcare.faro@gmail.com',
                'phone1' => '289 096 355',
                'phone2' => '914 267 577',
                'address' => 'Avenida Heróis da Pátria, Lote E Loja B - 8005-103 Faro',
                'url' => 'http://moonpetcare.wix.com/moonpetcare',
                'benefit' => '15%'
            ],
            [
                'name' => 'Morwise',
                'image' => 'partners/morwise.png',
                'email' => 'geral@morwise.com',
                'phone1' => '917 267 671',
                'phone2' => '964 970 678',
                'address' => 'Av. Infante D. Henrique, Ed. Luís Bernardo, R/C, 3730-241 – Vale de Cambra',
                'facebook' => 'https://www.facebook.com/morwise/',
                'url' => 'http://www.morwise.com',
                'benefit' => '15%'
            ],
            [
                'name' => 'Nae - Vegan Shoes',
                'image' => 'partners/naeveganshoes.jpg',
                'email' => 'info@nae-vegan.com',
                'phone1' => '214 935 990',
                'address' => 'LxFactory - Rua Rodrigues Faria, n103, Edifício I, Piso 1, Espaço 1.02 - 1300-501 Lisboa',
                'address_info' => 'Loja Física',
                'url' => 'http://nae-vegan.com',
                'benefit' => '20%'
            ],
            [
                'name' => 'Naturvida',
                'image' => 'partners/naturvida.jpg',
                'email' => 'naturvida.aveiro@gmail.com',
                'phone1' => '234 046 043',
                'phone2' => '960 075 126',
                'address' => 'Rua Mário Sacramento, 11 r/c - 3810-105 Aveiro',
                'facebook' => 'https://www.facebook.com/naturvida.aveiro/',
                'benefit' => '10% em Suplementos Alimentares, 5% desconto em produtos alimentares'
            ],
            [
                'name' => 'Nina Maria',
                'image' => 'partners/ninamaria.jpg',
                'email' => 'geral@ninamaria.pt ',
                'phone1' => '938 423 417',
                'facebook' => 'https://www.facebook.com/byninamaria/',
                'url' => 'http://ninamaria.biz.sapo.pt/',
                'benefit' => '10%'
            ],
            [
                'name' => 'O Cão Laranja',
                'image' => 'partners/ocaolaranja.jpg',
                'email' => 'geral@ocaolaranja.com',
                'phone1' => '938 315 317',
                'phone2' => '212 430 920',
                'address' => 'Praceta do Infantário, n7 - Loja B - Reboleira - 2720-304 Amadora',
                'url' => 'http://www.ocaolaranja.com',
                'benefit' => '10% em Hotel, banhos e tosquias'
            ],
            [
                'name' => 'O Gato Hobby',
                'image' => 'partners/ogatohobby.jpg',
                'email' => 'ogatohobby@gmail.com',
                'url' => 'http://ogatohobby.com',
                'benefit' => '15% em toda a loja excepto a categoria retrosaria'
            ],
            [
                'name' => 'Organii',
                'image' => 'partners/organii.png',
                'email' => 'comunicacao@organii.pt',
                'phone1' => '218 218 519',
                'url' => 'http://www.organii.pt/',
                'benefit' => '5%'
            ],
            [
                'name' => 'Patocycles',
                'image' => 'partners/patocycles.jpg',
                'email' => 'web@patocycles.com',
                'phone1' => '228 323 885',
                'phone2' => '933 334 335',
                'address' => 'Rua Monte dos Burgos nº 964 - 4250-313 Porto',
                'facebook' => 'https://www.facebook.com/Patocycles/',
                'url' => 'http://www.patocycles.com',
                'benefit' => '15% sobre o PVP (não acumulável com outros descontos ou promoções) e 50% em serviços (mão de obra)'
            ],
            [
                'name' => 'Power Foods',
                'image' => 'partners/powerfoods.jpg',
                'email' => 'geral@powerfoods.pt',
                'phone1' => '211 391 393',
                'phone2' => '916 660 066',
                'address' => 'Praça Proj. a Av. das Forças Armadas, Nº 2A, 1600-316 Lisboa',
                'address_info' => 'Loja Física',
                'url' => 'http://www.powerfoods.pt',
                'benefit' => '30% desconto na 1.ª compra de pacotes de 20 + 15% de desconto em qualquer compra'
            ],
            [
                'name' => 'Quinta das Águias',
                'image' => 'partners/quintadasaguias.jpg',
                'email' => 'quintadasaguias@gmail.com',
                'address' => '4940-692 Paredes de Coura',
                'facebook' => 'https://www.facebook.com/quinta.aguias/?ref=br_rs',
                'url' => 'https://www.airbnb.com/rooms/2187266',
                'benefit' => '10%'
            ],
            [
                'name' => 'Quinta Monte dos Vendavais',
                'image' => 'partners/quintamontevendavais.jpg',
                'email' => 'geral@montedosvendavais.com',
                'phone1' => '913 795 080',
                'address' => 'Rua Monte dos Vendavais, n154 - 2785-627 S. Domingos de Rana - Cascais',
                'facebook' => 'https://www.facebook.com/MontedosVendavais/',
                'url' => 'http://www.montedosvendavais.com/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Quintal Bioshop',
                'image' => 'partners/quintalbioshop.jpg',
                'email' => 'mail@quintalbioshop.com',
                'phone1' => '222 010 008',
                'address' => 'Rua do Rosário, 177 - Porto',
                'facebook' => 'https://www.facebook.com/Quintal-Bioshop-178770513269/?fref=ts',
                'benefit' => '10% apenas nos produtos à venda na loja'
            ],
            [
                'name' => 'Reiki Studio Porto',
                'image' => 'partners/reiki.jpg',
                'email' => 'info@reikistudio.pt',
                'phone1' => '916 561 799',
                'address' => 'Avenida Dom Afonso Henriques, n872, 1º andar, Sala 15 - 4450-010 Matosinhos',
                'facebook' => 'https://www.facebook.com/reikistudioporto/',
                'url' => 'http://www.reikistudio.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Jardim dos Sentidos',
                'image' => 'partners/jardimsentidos.jpg',
                'email' => 'geral@jardimdosentidos.com',
                'phone1' => '213 423 670',
                'phone2' => '912 888 408',
                'address' => 'Rua da Mãe d\'Água, n3 - 1250-154 Lisboa',
                'url' => 'http://www.jardimdosentidos.com',
                'benefit' => '10% nas refeições'
            ],
            [
                'name' => 'Os Tibetanos — Restaurante',
                'image' => 'partners/ostibetanos.jpg',
                'email' => 'info@tibetanos.com',
                'phone1' => '213 142 038',
                'phone2' => '932 846 610',
                'address' => 'Rua do Salitre, n117 - 1250-198 Lisboa',
                'url' => 'http://www.tibetanos.com',
                'benefit' => '10% nas refeições'
            ],
            [
                'name' => 'Rita C ',
                'image' => 'partners/ritac.jpg',
                'email' => 'info@rita-c.com',
                'phone1' => '925 212 013',
                'url' => 'https://www.rita-c.com',
                'benefit' => '10%'
            ],
            [
                'name' => 'Sabor Fazer',
                'image' => 'partners/saborfazer.jpg',
                'email' => 'ana.castro@saborfazer.pt',
                'facebook' => 'https://www.facebook.com/saborfazer/?fref=ts',
                'url' => 'http://saborfazer.pt',
                'benefit' => '15%'
            ],
            [
                'name' => 'Sapato Verde',
                'image' => 'partners/sapatoverde.jpg',
                'email' => 'info@sapatoverde.pt',
                'phone1' => '214 830 014',
                'phone2' => '924 216 519',
                'address' => 'Travessa dos Navegantes, n15 - Cascais',
                'address_info' => 'Loja Física',
                'url' => 'http://www.sapatoverde.pt/',
                'benefit' => '10% (O desconto não é válido para produtos que estejam em promoção nem é acumulável com outras promoções)'
            ],
            [
                'name' => 'Spaso Zen',
                'image' => 'partners/spasozen.jpg',
                'email' => 'info@spasozen.com',
                'phone1' => '226 099 723',
                'phone2' => '912 620 332',
                'address' => 'Rua do Campo Alegre, n1256 - 4150-174 Porto',
                'facebook' => 'https://www.facebook.com/spasozenwellness/',
                'url' => 'http://www.spasozen.com/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Taroço',
                'image' => 'partners/taroco.jpg',
                'email' => 'taroco.geral@gmail.com',
                'url' => 'http://taroco.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'The Love Food',
                'image' => 'partners/thelovefood.png',
                'email' => 'thelovefood@hotmail.com',
                'phone1' => '914 651 380',
                'address' => 'Rua do Gravato 5B, Caselas (Restelo) - Só para levantamento de encomendas',
                'url' => 'http://www.thelovefood.pt/',
                'benefit' => ' 15%'
            ],
            [
                'name' => 'Toskiart',
                'image' => 'partners/toskiart.jpg',
                'email' => 'toskiart@gmail.com',
                'phone1' => '913 775 700',
                'address' => 'Rua Barão de Sabrosa, n292 - Areeiro - 1900-096 Lisboa',
                'facebook' => 'https://www.facebook.com/TOSKIART/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Turma dos Curiosos',
                'image' => 'partners/turmadoscuriosos.jpg',
                'email' => 'turma.curiosos@gmail.com',
                'phone1' => '917 251 403',
                'phone2' => ' 220 927 993',
                'address' => 'Av. D. Manuel II, 958 - Vermoim - Maia',
                'facebook' => 'https://www.facebook.com/TurmadosCuriosos/',
                'url' => 'http://www.turmadoscuriosos.com/',
                'benefit' => '50% no valor da inscrição'
            ],
            [
                'name' => 'Veggie Lovers',
                'image' => 'partners/veggielovers.png',
                'email' => 'veggieloverstruck@gmail.com',
                'phone1' => ' 964 496 562',
                'facebook' => 'https://www.facebook.com/VeggieLoversTruck/',
                'benefit' => '10%'
            ],
            [
                'name' => 'Vet Barrocas',
                'image' => 'partners/vetbarrocas.png',
                'email' => ' vetbarrocas@gmail.com',
                'phone1' => '911 763 419',
                'address' => 'Av. Força Aérea Portuguesa n87 - Aveiro',
                'facebook' => 'https://www.facebook.com/VetBarrocas/',
                'benefit' => '15%'
            ],
            [
                'name' => 'World of Discoveries',
                'image' => 'partners/worlddiscoveries.jpg',
                'email' => 'info@worldofdiscoveries.com',
                'phone1' => '220 439 770',
                'address' => 'Rua de Miragaia, n106 - 4050-387 Porto',
                'url' => 'https://www.worldofdiscoveries.com',
                'benefit' => '20% no bilhete para a Exposição Permanente'
            ],
            [
                'name' => 'PeT reQoveR',
                'image' => 'partners/petreqover.jpg',
                'email' => 'armando.cerdeira@gmail.com',
                'facebook' => 'https://www.facebook.com/petreqover/',
                'benefit' => '10%. Normalmente vendemos a 10€ + 2€ de Portes de Envio (caso não seja de Lisboa), para quem tenha o cartão, fazemos a 9€ + 2€ de Portes de Envio (caso não seja de Lisboa).'
            ],
            [
                'name' => 'Carreira & Agripino',
                'image' => 'partners/logocores.jpg',
                'email' => 'geral@ca-consultores.com',
                'phone1' => '210 962 996',
                'phone2' => '927 190 514',
                'address' => 'LISBOA: Centro Empresarial ANJE - Rua António Luís Gomes, 14 - 1495-120 Algés --- VISEU: Quinta do Salgueiro, 35 R/C Esq Frente - 3500 - 422 Viseu  ',
                'facebook' => 'https://www.facebook.com/carreiraeagripino',
                'url' => 'http://www.ca-consultores.com/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Bem Bom Produtos Veganos',
                'image' => 'partners/bembomlogo.jpg',
                'email' => 'bembomprodutosveganos@gmail.com',
                'phone1' => '912 982 867',
                'facebook' => 'https://www.facebook.com/BemBom.produtos.veganos/',
                'url' => 'http://www.bembom-produtosveganos.pt/',
                'benefit' => '10%'
            ],
            [
                'name' => 'O Gato Fica',
                'image' => 'partners/logogato.jpg',
                'email' => 'geral@ogatofica.com',
                'phone1' => '961 644 444',
                'address' => 'Lisboa',
                'facebook' => 'https://www.facebook.com/ogatofica/',
                'url' => 'http://ogatofica.com/',
                'benefit' => '10%apenas nos serviços de catsitting, avaliações de comportamento e bem-estar, acompanhamento ao veterinário e aconselhamento sobre introduções.'
            ],
            [
                'name' => 'Hospital Veterinário Arco do cego',
                'image' => 'partners/hvarcodocegogato.jpg',
                'email' => 'geral@vetarcodocego.pt',
                'phone1' => '213 156 20',
                'phone2' => '927 427 505',
                'address' => 'Rua Dona Filipa de Vilhena, 4E - 1000-135 Lisboa',
                'facebook' => 'https://www.facebook.com/VetArcoDoCego/',
                'url' => 'http://vetarcodocego.pt/pt/home',
                'benefit' => '15% consultas (não inclui as consultas de especialidade) | 10% serviços efectuados por nós (não inclui análises externas, cirurgias ou outros procedimentos em que se recorra a veterinário especialista) | Medicamentos e rações não estão incluídos (poderemo'
            ],
            [
                'name' => 'Publicações Maitreya',
                'image' => 'partners/previewlightboxlogo.jpg',
                'email' => ' flora@publicacoesmaitreya.pt',
                'phone1' => '222 012 120',
                'phone2' => '968 473 218',
                'url' => 'http://www.publicacoesmaitreya.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Quinta da Mata',
                'image' => 'partners/logoqm.png',
                'email' => 'geral@quintadamata.net',
                'phone1' => '276 340 030',
                'phone2' => '276 340 038',
                'address' => 'Estrada Nacional 213 - Vilar de Nantes - Chaves',
                'facebook' => 'https://www.facebook.com/Quinta-da-Mata-1375773969417032/',
                'url' => 'http://quintadamata.net/site/index.html',
                'benefit' => '15%'
            ],
            [
                'name' => 'gato Preto de Silves',
                'image' => 'partners/logogatopretosilves.png',
                'email' => 'gatopretodesilves@gmail.com',
                'phone1' => '282 400 730',
                'address' => 'Rua N124, 8300-999 Silves, Faro',
                'facebook' => 'https://www.facebook.com/MateusCri/',
                'url' => 'http://silves-portugal.com',
                'benefit' => '15% (Reservas tem que ser feitas no site www.gatopretodesilves.com)'
            ],
            [
                'name' => 'Fisiomassagens Wellness & Beauty',
                'image' => 'partners/fisio.jpg',
                'email' => 'apoio.fisiomassagens@gmail.com ',
                'phone1' => '910 586 142',
                'address' => 'Rua Adelaide Cabete, 10 loja A (Na Rua dos Correios da Quinta da Luz) 1500-024 Carnide, Lisboa ',
                'facebook' => 'https://facebook.com/Fisiomassagens ',
                'url' => 'ttp://www.fisiomassagens.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'PSI Restaurante Vegetariano',
                'image' => 'partners/logodark2.png',
                'email' => 'geral@restaurante-psi.com',
                'phone1' => '213 590 573',
                'address' => 'Alameda Sto António dos Capuchos, Jardim dos Sabores Lisboa',
                'facebook' => 'https://www.facebook.com/RestaurantePsi/',
                'url' => 'http://www.restaurante-psi.com/',
                'benefit' => '10%'
            ],
            [
                'name' => 'Vitamina-te',
                'image' => 'partners/vitaminate.jpg',
                'email' => 'dianasmgomes@gmail.com',
                'phone1' => '967 732 568',
                'facebook' => 'https://www.facebook.com/VitaminaTe/',
                'url' => 'http://www.vitamina-te.pt',
                'benefit' => '10%'
            ],
            [
                'name' => 'Matsya',
                'image' => 'partners/matsya.jpg',
                'email' => 'matsya.artes@gmail.com',
                'facebook' => 'https://facebook.com/matsya.artes',
                'benefit' => '10%'
            ],
            [
                'name' => 'Najha',
                'image' => 'partners/najha.png',
                'email' => 'najhafashionbags@gmail.com',
                'phone1' => '256 068 980',
                'address' => 'Rua da Ponte Nova, 170 - 4535-291 Paços de Brandão',
                'facebook' => 'https://www.facebook.com/najhafashion/',
                'url' => ' http://www.najha.com/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Bricotec 24',
                'image' => 'partners/bricotec24sociallogo.jpg',
                'email' => 'geral@bricotec24.pt',
                'phone1' => '961 635 603',
                'phone2' => '930 601 358',
                'address' => 'Apartado 121 EC Gondomar - 4424-909 Gondomar',
                'facebook' => 'https://www.facebook.com/bricotec24/?/',
                'url' => 'https://bricotec24.pt/',
                'benefit' => '15% de desconto em serviços de assistência a caldeiras, esquentadores, localização de fugas de água e desentupimentos de esgotos. (Exclui-se deslocações, peças ou materiais )'
            ],
            [
                'name' => 'Diana Nobre Fotografia',
                'image' => 'partners/diananobre.jpg',
                'email' => 'pappermoonsphotography@gmail.com',
                'phone1' => '911 082 434',
                'address' => 'Rua Viterbo Campos n452 - 4400-344 Vila Nova de Gaia',
                'facebook' => 'https://www.facebook.com/DianaNobrePhotography/',
                'url' => 'http://diananobre.com/',
                'benefit' => '10%'
            ],
            [
                'name' => 'Hotel Senhora do Castelo',
                'image' => 'partners/hotelsenhoracastelo.jpg',
                'email' => 'reservas@cotel.pt',
                'phone1' => '232 619 950',
                'phone2' => '912 225 090',
                'address' => 'Rua de Santa Maria do Castelo - 3530-238 Mangualde',
                'facebook' => 'https://www.facebook.com/hotelsenhoracastelo',
                'url' => 'http://www.cotel.pt/',
                'benefit' => '15% Alojamento, 15% F&B, Oferta garrafa de água'
            ],
            [
                'name' => 'Art of Steel Jóias - Jóias em aço inoxidável',
                'image' => 'partners/logoartofsteel1.jpg',
                'email' => 'geral@artofsteel@gmail.com',
                'phone1' => '968 927 701',
                'facebook' => 'https://www.facebook.com/art.of.steel.loja/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Green Beans, Mercado Vegan',
                'image' => 'partners/logogreenbeans.jpg',
                'email' => 'info@greenbeans.pt',
                'phone1' => '924 216 519',
                'address' => 'Rua das Chagas 31-33 - 1200-106 Lisboa',
                'facebook' => 'https://www.facebook.com/vegangreenbeans/',
                'url' => 'ttp://www.greenbeans.pt/',
                'benefit' => '5%'
            ],
            [
                'name' => 'Psiquilíbrios Edições',
                'image' => 'partners/psiqedicoeslogo.png',
                'email' => 'psiquilibrios@gmail.com',
                'phone1' => '934 206 715',
                'facebook' => 'https://www.facebook.com/psiquilibrios.edicoesformacao/',
                'url' => 'http://psiquilibrios.pt',
                'benefit' => '25% livros Psiquilibrios Edições excepto: Sistema de avaliação Empiricamente Validado (ASEBA);  Como promover as competências sociais e emocionais das crianças; Pôr o medo a fugir. Enc: psiquilibrios@gmail.com, mín. 30€, 2 livros por título, portes 1,50€'
            ],
            [
                'name' => '100% FITCLUB',
                'image' => 'partners/100fitclub.png',
                'email' => '100fitclub@gmail.com',
                'phone1' => '925 782 861',
                'phone2' => '216 032 019',
                'address' => 'Estrada de Mem Martins, junto ao McDonalds de Mem Martins, Sintra',
                'facebook' => 'https://www.facebook.com/100FitClub/',
                'url' => 'http://100fitclub.com/',
                'benefit' => 'Oferta da inscrição inicial  |  10% de redução da mensalidade no Plano de Livre Trânsito Total  |  Oferta de avaliações físicas trimestrais e plano de treino personalizado.'
            ],
            [
                'name' => 'Ao26 Vegan Food Project',
                'image' => 'partners/ao2601.jpg',
                'email' => 'ao26veganfoodproject@gmail.com',
                'phone1' => '967 989 184',
                'address' => 'Rua Vitor Cordon, 26 Lisboa',
                'facebook' => 'https://www.facebook.com/ao26veganfoodproject/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Salva Vidas - Redes de Protecção',
                'image' => 'partners/svrd.jpg',
                'email' => 'redesdeprotecaosv@gmail.com',
                'phone1' => '926 224 246',
                'address' => 'Praceta Sao Pedro',
                'facebook' => 'https://www.facebook.com/redesdeprotecaosv/',
                'url' => 'http://www.redesalvavidas.pt',
                'benefit' => '15%'
            ],
            [
                'name' => 'PAW - Pets Anywhere',
                'image' => 'partners/logopaw.jpg',
                'email' => 'pawtravels.eu@gmail.com',
                'phone1' => '926 785 764',
                'facebook' => 'https://www.facebook.com/petsanywhere/',
                'url' => 'http://paw.ventuzashis.pt',
                'benefit' => '15%'
            ],
            [
                'name' => 'Centro do Yoga Áshrama Rato',
                'image' => 'partners/logoashramarato.jpg',
                'email' => 'mail@centroyogarato.com',
                'phone1' => '213 866 090',
                'phone2' => '910 569 163',
                'address' => 'Largo do Rato, n4 - 1.º - 1250-186 Lisboa',
                'facebook' => 'https://www.facebook.com/yoga.rato/',
                'url' => 'http://www.centroyogarato.com/',
                'benefit' => '10 euros de desconto na mensalidade de 2x por semana + 50% de desconto na taxa de inscrição'
            ],
            [
                'name' => 'Cruzeiros Atlântico',
                'image' => 'partners/logocruzeiros.jpg',
                'email' => 'info@cruzeirosatlantico.pt',
                'phone1' => '965 316 162',
                'phone2' => '934 591 126',
                'address' => 'Rua Fernando Pessoa, 8 - loja 12 - Cova da Piedade - 2820-065 Almada ',
                'facebook' => 'https://www.facebook.com/cruzeirosatlant1co/',
                'url' => 'http://www.cruzeirosatlantico.pt/index.php/en/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Vet Consulting - Clínica Veterinária',
                'image' => 'partners/logoclinica.jpg',
                'email' => 'clinica.vetconsulting@gmail.com',
                'phone1' => '967 429 642',
                'phone2' => '291 934 739',
                'address' => 'Rua Dr.Francisco Peres - Edifício Jardins do Caniço Loja 7 e 8 - Caniço - Madeira',
                'facebook' => 'https://www.facebook.com/clinica.vetconsulting/',
                'url' => 'http://vetconsulting.pt/',
                'benefit' => '15%'
            ],
            [
                'name' => 'Maria Santos',
                'image' => 'partners/mariasantos.jpg',
                'email' => 'santosbymariasantos@gmail.com',
                'facebook' => 'https://www.facebook.com/by.mariasantos/',
                'benefit' => '20% de desconto em todos os serviços'
            ],
            [
                'name' => 'EverVegan',
                'image' => 'partners/evervegan.png',
                'email' => 'marketing@evervegan.pt',
                'phone1' => '919 849 326',
                'phone2' => '214 788 710',
                'address' => 'Impasse à AV. José Francisco Guerreiro, 4, 1675-076 Pontinha',
                'facebook' => 'https://www.facebook.com/evervegan.pt/',
                'url' => 'https://www.evervegan.pt/',
                'benefit' => '10% em produtos alimentares EverVegan, para compras acima dos 25€. Válido somente no site da EverVegan.pt'
            ],
            [
                'name' => 'Meu Vegetariano',
                'image' => 'partners/meuvegatariano.jpg',
                'email' => 'meuvegetariano@gmail.com',
                'phone1' => '919 775 555',
                'address' => 'Av. 22 de Dezembro 27B, 2900-668 Setúbal  ',
                'facebook' => 'https://www.facebook.com/meuvegetariano?ref=ts&fref=ts',
                'url' => 'https://meuvegetariano.weebly.com/',
                'benefit' => '10% nos Workshops de Cozinha Vegetariana e oferta da sobremesa na compra do Menu 2 ao apresentar o seu Cartão Amigo.'
            ]
        ];

        $partner_categories = [
            [1, 1],
            [1, 11],
            [2, 3],
            [3, 6],
            [4, 1],
            [5, 3],
            [6, 5],
            [6, 9],
            [7, 1],
            [8, 3],
            [9, 1],
            [10, 2],
            [11, 8],
            [12, 3],
            [13, 3],
            [14, 3],
            [15, 3],
            [16, 3],
            [17, 1],
            [18, 1],
            [20, 14],
            [21, 11],
            [21, 13],
            [23, 3],
            [24, 3],
            [25, 3],
            [26, 3],
            [27, 9],
            [28, 1],
            [28, 11],
            [29, 11],
            [30, 17],
            [31, 2],
            [31, 11],
            [32, 1],
            [33, 3],
            [34, 7],
            [36, 1],
            [36, 6],
            [37, 3],
            [37, 11],
            [38, 3],
            [39, 5],
            [41, 7],
            [43, 17],
            [44, 3],
            [45, 1],
            [46, 6],
            [47, 1],
            [48, 1],
            [49, 6],
            [50, 1],
            [51, 16],
            [52, 6],
            [53, 11],
            [54, 1],
            [55, 3],
            [56, 4],
            [57, 1],
            [58, 3],
            [59, 12],
            [60, 11],
            [61, 13],
            [62, 11],
            [63, 3],
            [64, 3],
            [65, 10],
            [65, 11],
            [66, 17],
            [67, 17],
            [68, 6],
            [69, 1],
            [70, 6],
            [70, 11],
            [71, 5],
            [71, 11],
            [72, 11],
            [72, 16],
            [73, 11],
            [73, 15],
            [74, 8],
            [75, 17],
            [76, 9],
            [76, 11],
            [77, 3],
            [78, 1],
            [78, 11],
            [79, 11],
            [80, 6],
            [81, 1],
            [82, 3],
            [82, 11],
            [83, 6],
            [84, 17],
            [85, 3],
            [86, 5],
            [86, 11],
            [87, 1],
            [87, 11],
            [88, 1],
            [88, 11]
        ];

        $partner_territories = [
            [2, '13'],
            [3, '11'],
            [4, '13'],
            [5, '11'],
            [7, '11'],
            [8, '13'],
            [9, '13'],
            [10, '08'],
            [11, '11'],
            [12, '13'],
            [13, '13'],
            [14, '13'],
            [15, '13'],
            [16, '01'],
            [17, '13'],
            [18, '06'],
            [19, '11'],
            [20, '11'],
            [21, '13'],
            [22, '15'],
            [23, '13'],
            [24, '13'],
            [25, '11'],
            [26, '01'],
            [26, '03'],
            [26, '13'],
            [27, '13'],
            [29, '13'],
            [30, '08'],
            [31, '13'],
            [32, '11'],
            [33, '08'],
            [34, '01'],
            [35, '11'],
            [36, '01'],
            [38, '11'],
            [41, '13'],
            [42, '11'],
            [43, '16'],
            [44, '11'],
            [45, '13'],
            [46, '13'],
            [47, '11'],
            [48, '11'],
            [50, '14'],
            [51, '11'],
            [52, '13'],
            [55, '11'],
            [56, '13'],
            [58, '01'],
            [59, '13'],
            [61, '13'],
            [61, '18'],
            [63, '11'],
            [64, '11'],
            [66, '17'],
            [67, '08'],
            [68, '11'],
            [69, '11'],
            [72, '01'],
            [74, '13'],
            [75, '18'],
            [77, '11'],
            [78, '11'],
            [79, '03'],
            [80, '11'],
            [81, '11'],
            [83, '11'],
            [84, '11'],
            [85, '19'],
            [87, '11'],
            [88, '15']
        ];

        foreach ($categories as $category) {
            DB::table('partner_category_list')->insert([
                'name' => json_encode(['pt' => $category[0]]),
                'description' => json_encode(['pt' => $category[1]]),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }

        foreach ($partners as $partner) {
            DB::table('partners')->insert([
                array_merge($partner, [
                    'benefit' => json_encode(['pt' => $partner['benefit']]),
                    'created_at' => $date,
                    'updated_at' => $date
                ])
            ]);
        }

        foreach ($partner_categories as $partner_category) {
            DB::table('partners_categories')->insert([
                'partner_id' => $partner_category[0],
                'partner_category_list_id' => $partner_category[1]
            ]);
        }

        foreach ($partner_territories as $partner_territory) {
            DB::table('partners_territories')->insert([
                'partner_id' => $partner_territory[0],
                'territory_id' => $partner_territory[1]
            ]);
        }
    }
}
