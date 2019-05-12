<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ActividadesTableSeeder::class);
        $this->call(AlineacionesTableSeeder::class);
        $this->call(AlineacionTraineraTableSeeder::class);
        $this->call(DocumentosTableSeeder::class);
        $this->call(EntrenamientosTableSeeder::class);
        $this->call(ParametrosTableSeeder::class);
        $this->call(TrainerasTableSeeder::class);
    }
}
