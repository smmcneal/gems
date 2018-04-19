<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Garnet',
            'slug' => '.5 ct Garnet',
            'description' => 'This gorgeous Garnet comes all the way from Tasmania and weighs in at a hefty .5 carets',
            'price' => 20,
            'image' => 'garnet.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Beryl',
            'slug' => '.2 ct Beryl',
            'description' => 'This gorgeous Beryl comes all the way from Australia and weighs in at a hefty .2 carets',
            'price' => 30,
            'image' => 'Beryl.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pedinera Tourmaline',
            'slug' => '8.69g Pedinera Tourmaline',
            'description' => 'This gorgeous Pedinera Tourmaline comes all the way from Nova Scotia and weighs in at a big 8.69 grams',
            'price' => 15,
            'image' => 'TourmalineClevelandite.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Crystal Quartz',
            'slug' => '.7 ct Crystal Quartz',
            'description' => 'This gorgeous Crystal Quartz comes all the way from Alabama and weighs in at a hefty .7 carets',
            'price' => 45,
            'image' => 'CrystalQuartz.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Garnet on Andradite',
            'slug' => '1.2 ct Garnet on Andradite',
            'description' => 'This gorgeous Garnet on Andradite comes all the way from South Africa and weighs in at a hefty 1.2 carets',
            'price' => 75,
            'image' => 'GarnetAndradite.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Beryl on Bixbite',
            'slug' => '.3 Beryl on Bixbite',
            'description' => 'This gorgeous Beryl on Bixbite comes all the way from Krypton and weighs in at a hefty .3 carets',
            'price' => 35,
            'image' => 'BerylBixbite.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Nepalese Tourmaline',
            'slug' => '3 pc Nepalese Tourmaline',
            'description' => '3 pc Nepalese Tourmaline',
            'price' => 129,
            'image' => 'Tourmaline.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Quartz',
            'slug' => '3 ct Quartz',
            'description' => '3 ct Quartz',
            'price' => 89.99,
            'image' => 'Quartz.jpg',
        ]);
    }
}
