<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(JewelryTypeSeeder::class);
        $this->call(SubJewelryTypeSeeder::class);
        $this->call(JewelryPieceSeeder::class);
    }
}
