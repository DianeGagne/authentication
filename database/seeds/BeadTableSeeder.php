<?php

use Illuminate\Database\Seeder;

class BeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beads')->insert([
            'name' => 'DB0001',
            'name_description' => 'Gunmetal',
            'image_file' => 'db0001',
        ]);
        DB::table('beads')->insert([
            'name' => 'DB0002',
            'name_description' => 'Blue Iris',
            'image_file' => 'db0002',
        ]);
        DB::table('beads')->insert([
            'name' => 'DB0003',
            'name_description' => 'Green Iris',
            'image_file' => 'db0003',
        ]);
        DB::table('beads')->insert([
            'name' => 'DB0004',
            'name_description' => 'Purple Iris',
            'image_file' => 'db0004',
        ]);
        DB::table('beads')->insert([
            'name' => 'DB0005',
            'name_description' => 'Black AB',
            'image_file' => 'db0005',
        ]);
    }
}
