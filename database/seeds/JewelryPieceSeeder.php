<?php

use Illuminate\Database\Seeder;

class JewelryPieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$pendant_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Pendant')
        		->get();
        $beadednecklace_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Beaded_Necklace')
        		->get();
        $charmnecklace_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Charm_Necklace')
        		->get();
        $barnecklace_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Bar_Necklace')
        		->get();
		$multistrand_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Multi_Strand')
        		->get();
        $cameo_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Cameo')
        		->get();
        $ynecklace_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Y_Necklace')
        		->get();
        $locket_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Locket')
        		->get();
        $charmbracelet_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Charm_Bracelet')
        		->get();
        $seedbead_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Seedbead')
        		->get();
        $beadedbracelet_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Beaded_Bracelet')
        		->get();
        $cuff_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Cuff')
        		->get();
        $barbracelet_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Bar_Bracelet')
        		->get();
        $hoop_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Hoop')
        		->get();
        $fishhook_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Fish_Hook')
        		->get();
        $kidneywire_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Kidney_Wire')
        		->get();
        $leather_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Leather')
        		->get();
        $beadedchoker_id = DB::table('sub_jewelry_types')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Beaded_Choker')
        		->get();

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$hoop_id[0]->id,
        	'name'=>'Bird and Pearl',
        	'description'=>'Antique gold 3-D bird charm hangs with a ivory glass Pearl to make up 			these beautiful earrings. They are great for a woodland or boho wedding 		  or a gift for her.',
        	'price'=>26.00,
        	'img'=>'https://img1.etsystatic.com/124/0/13617128/il_fullxfull.1095178927_kya9.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$hoop_id[0]->id,
        	'name'=>'Angel Wing',
        	'description'=>'Crystal Drop Angel Wing Hoop Earrings are antique brass on an antique brass hoops with a Crystal drop. Earrings are hand made, all metal used is lead and nickel free. Total length is 3 inches. Gift for her,',
        	'price'=>26.00,
        	'img'=>'https://img1.etsystatic.com/130/0/13617128/il_fullxfull.1095167819_9hac.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$kidneywire_id[0]->id,
        	'name'=>'Butterfly Dangle',
        	'description'=>'Butterfly earrings are antique brass, with a lilac stone bead. Handmade with lead and nickel free metal. Perfect addition to your fall wardrobe. ',
        	'price'=>24.00,
        	'img'=>'https://img0.etsystatic.com/110/0/13617128/il_fullxfull.1053105618_9jk2.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$fishhook_id[0]->id,
        	'name'=>'Indian Chief',
        	'description'=>'Indian Chief Dangle Earrings, made from antique bronze fish hook wire. Lead and nickel free high quality metals a small rhinestone adorns the head dress. Fish hook earring.',
        	'price'=>24.00,
        	'img'=>'https://img0.etsystatic.com/179/0/13617128/il_fullxfull.1128268236_1p9x.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$barnecklace_id[0]->id,
        	'name'=>'Red Glazed',
        	'description'=>'Red glazed 12mm glass bead bronze beaded necklace. Chain is 20 inches made with long short cable chain.',
        	'price'=>24.00,
        	'img'=>'https://img1.etsystatic.com/144/0/13617128/il_fullxfull.1217925607_42ju.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$pendant_id[0]->id,
        	'name'=>'Large Heart Pendant',
        	'description'=>'Large heart pendant with an 18mm resin flower and large crystal drop with 1.5 inch turquoise tassel.',
        	'price'=>32.00,
        	'img'=>'https://img0.etsystatic.com/170/0/13617128/il_fullxfull.1170977018_14o5.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$seedbead_id[0]->id,
        	'name'=>'Blue Seedbead',
        	'description'=>'Blue seed bead bracelet, one size fits most',
        	'price'=>24.00,
        	'img'=>'https://img1.etsystatic.com/177/0/13617128/il_fullxfull.1212122793_fkzj.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$cuff_id[0]->id,
        	'name'=>'Filigree Cuff',
        	'description'=>'Bronze filigree cuff bracelet with 30mm periwinkle blue resin flower.',
        	'price'=>32.00,
        	'img'=>'https://img1.etsystatic.com/149/0/13617128/il_fullxfull.1212111617_mosc.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$charmnecklace_id[0]->id,
        	'name'=>'Bull Head Charm',
        	'description'=>'Bull head charm necklace with 6mm ivory glass pearls, 6mm filigree beads. Chain is 5x4mm double link bronze chain.',
        	'price'=>28.00,
        	'img'=>'https://img1.etsystatic.com/179/0/13617128/il_fullxfull.1218160397_9jbn.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$beadednecklace_id[0]->id,
        	'name'=>'White Bird',
        	'description'=>'14mm White magnesite 36" necklace with 2 36X54MM bird connectors and 1 40x90mm branch connector.',
        	'price'=>42.00,
        	'img'=>'https://img1.etsystatic.com/148/0/13617128/il_fullxfull.1215596895_7s0x.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$multistrand_id[0]->id,
        	'name'=>'Turquoise Elephant',
        	'description'=>'Turquoise and coral multi strand leather necklace. I used various sizes of turquoise beads and coral tube beads to make the first two strand. The third stand is 7.8x6 mm cable chain and a 3D elephant pendant measuring 16x35x51 mm. 3mm suede leather is used for the top part of the necklace. All hand beaded.',
        	'price'=>95.00,
        	'img'=>'https://img0.etsystatic.com/197/0/13617128/il_fullxfull.1233454352_oyca.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$cameo_id[0]->id,
        	'name'=>'Rose Cameo',
        	'description'=>'Romantic Vintage-style Rose Double sided cameo necklace with flower and tassel charm. Antique gold chain is 18 inches includes a chain extender.',
        	'price'=>28.00,
        	'img'=>'https://img0.etsystatic.com/195/0/13617128/il_fullxfull.1233430828_g9h9.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$ynecklace_id[0]->id,
        	'name'=>'Flying Sparrow',
        	'description'=>'Flying sparrow y-necklace with hand beaded glass beads and bead caps. Turquoise and feather charm hang under a crystal drop. All metal is lead and nickel free.',
        	'price'=>30.00,
        	'img'=>'https://img1.etsystatic.com/207/0/13617128/il_fullxfull.1280668133_icbe.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$barbracelet_id[0]->id,
        	'name'=>'Turquoise Beaded Bar',
        	'description'=>'Bronze 8mm turquoise bar bracelet.',
        	'price'=>20.00,
        	'img'=>'https://img0.etsystatic.com/167/0/13617128/il_fullxfull.1170136132_k6rb.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$beadedbracelet_id[0]->id,
        	'name'=>'Hand Beaded Quartz',
        	'description'=>'Hand beaded quartz bracelet with bird charm is 7 1/2 inches with large lobster clasp so it is easy on and easy off. Pink ice flake quartz nuggets vary in size. The bird charm is 22x32mm. Great stacking bracelet.',
        	'price'=>26.00,
        	'img'=>'https://img1.etsystatic.com/158/0/13617128/il_fullxfull.1217320195_8m3o.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$locket_id[0]->id,
        	'name'=>'Bronze Crown Locket',
        	'description'=>'Bronze crown locket necklace with charms, Original design. Ball chain is 20 inches. Perfect for gift giving.',
        	'price'=>28.00,
        	'img'=>'https://img1.etsystatic.com/203/0/13617128/il_fullxfull.1280666125_k83p.jpg'
        	]);

        DB::table('jewelry_pieces')->insert([
        	'sub_jewelry_type_id'=>$charmbracelet_id[0]->id,
        	'name'=>'Fleur De Lis',
        	'description'=>'Antique gold fleur de lis charm bracelet. A crown, amber glass bead, fleur de lis, chess piece, pearl, cross shield are the charms on this charm bracelet. Bracelet is 7 3/4 inches long. It is made from a beautiful double link chain and a large easy to close lobster claw clasp. I can adjust the size of the bracelet as needed, just message me when you order.',
        	'price'=>28.00,
        	'img'=>'hhttps://img0.etsystatic.com/154/0/13617128/il_fullxfull.1170207066_5szj.jpg'
        	]);



    }
}
