<?php

use Illuminate\Database\Seeder;

class SubJewelryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$necklace_id = DB::table('jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Necklace')
        		->get();
        $bracelet_id = DB::table('jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Bracelet')
        		->get();
        $earing_id = DB::table('jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Earing')
        		->get();
        $choker_id = DB::table('jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Choker')
        		->get();

        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Pendant'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Beaded_Necklace'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Charm_Necklace'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Bar_Necklace'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Multi_Strand'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Cameo'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Y_Necklace'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $necklace_id[0]->id,
        	'name'=> 'Locket'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $bracelet_id[0]->id,
        	'name'=>'Charm_Bracelet'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $bracelet_id[0]->id,
        	'name'=>'Seedbead'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $bracelet_id[0]->id,
        	'name'=>'Beaded_Bracelet'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $bracelet_id[0]->id,
        	'name'=>'Cuff'
        	]);
        DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $bracelet_id[0]->id,
        	'name'=>'Bar_Bracelet'
        	]);
		DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $earing_id[0]->id,
        	'name'=>'Hoop'
        	]);
		DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $earing_id[0]->id,
        	'name'=>'Fish_Hook'
        	]);
		DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $earing_id[0]->id,
        	'name'=>'Kidney_Wire'
        	]);
		DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $choker_id[0]->id,
        	'name'=>'Leather'
        	]);
		DB::table('sub_jewelry_types')->insert([
        	'jewelry_type_id'=> $choker_id[0]->id,
        	'name'=>'Beaded_Choker'
        	]);
    }
}
