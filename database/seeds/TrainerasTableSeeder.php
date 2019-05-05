<?php

use Illuminate\Database\Seeder;

class TrainerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainera')->insert([
            'name' => 'trainera1',
            ]);
        DB::table('trainera')->insert([
            'name' => 'trainera2',
            ]);
 
            
    }
}
