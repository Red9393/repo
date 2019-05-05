<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Juan',
            'email'  => 'juan@gmail.com',
            'rol'  => '1',
            'password'  => '12345'
            ]);
    }
}
