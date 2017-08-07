<?php

use Illuminate\Database\Seeder;

class JewelryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jewelry_types')->insert([
        	'name'=>'Necklace'
        	]);

        DB::table('jewelry_types')->insert([
        	'name'=>'Bracelet'
        	]);

        DB::table('jewelry_types')->insert([
        	'name'=>'Earing'
        	]);

        DB::table('jewelry_types')->insert([
        	'name'=>'Choker'
        	]);

    }
}
