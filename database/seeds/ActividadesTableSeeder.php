<?php

use Illuminate\Database\Seeder;

class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividad')->insert([
            'name' => 'correr',
            ]);
        DB::table('actividad')->insert([
            'name' => 'ergometro',
            ]);
        DB::table('actividad')->insert([
            'name' => 'remo',
            ]);
    }
}
