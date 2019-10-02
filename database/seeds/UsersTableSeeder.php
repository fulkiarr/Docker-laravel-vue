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
            'email' => 'fulkimine@gmail.com',
            'password' => bcrypt("belakalaka99"),
            'name' => 'Fulki Arrafi'
        ]);
    }
}
