<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert(array(
            array(
              'shopname' => 'bicycle shop',
              'location' => '20',
            ),
            array(
                'shopname' => 'book shop',
                'location' => '30',
            ),
            array(
                'shopname' => 'cake shop',
                'location' => '85',
            ),
            array(
                'shopname' => 'dry cleaner',
                'location' => '98',
            ),
            array(
                'shopname' => 'florist',
                'location' => '150',
            ),
            array(
                'shopname' => 'furniture shop',
                'location' => '600',
            ),
            array(
                'shopname' => 'hardware shop',
                'location' => '102',
            ),
            array(
                'shopname' => 'health food shop',
                'location' => '215',
            ),
            array(
                'shopname' => 'ice cream parlor',
                'location' => '300',
            ),
            array(
                'shopname' => 'laundrette',
                'location' => '1030',
            ),
            array(
                'shopname' => 'pharmacy',
                'location' => '800',
            ),
            array(
                'shopname' => 'shoe shop',
                'location' => '5',
            ),
            array(
                'shopname' => 'DELI',
                'location' => '55',
            ),
            array(
                'shopname' => 'BUTCHER',
                'location' => '280',
            ),
            array(
                'shopname' => 'BAKER',
                'location' => '460',
            ),
            array(
                'shopname' => 'CHEMIST',
                'location' => '906',
            ),
            array(
                'shopname' => 'CONFECTIONER',
                'location' => '742',
            ),
            array(
                'shopname' => 'BOOKSHOP',
                'location' => '654',
            ),
            array(
                'shopname' => 'NEWSAGENT',
                'location' => '84',
            ),
            array(
                'shopname' => 'TOY SHOP',
                'location' => '132',
            ),
            array(
                'shopname' => 'NOVELTY STORE',
                'location' => '987',
            ),
            array(
                'shopname' => 'TOBACCONIST',
                'location' => '845',
            ),
            array(
                'shopname' => 'GREENGROCER',
                'location' => '623',
            ),
            array(
                'shopname' => 'PET SHOP',
                'location' => '60',
            ),
            array(
                'shopname' => 'MUSIC SHOP',
                'location' => '195',
            ),
            array(
                'shopname' => 'FISHMONGER',
                'location' => '472',
            ),
            array(
                'shopname' => 'CLOTHES SHOP',
                'location' => '333',
            ),
            array(
                'shopname' => 'SHOE SHOP',
                'location' => '228',
            ),
            array(
                'shopname' => 'ANTIQUE SHOP',
                'location' => '46',
            ),
            array(
                'shopname' => 'JEWELLER',
                'location' => '88',
            ),
            array(
                'shopname' => 'CARD SHOP',
                'location' => '99',
            ),
        ));
    }
}