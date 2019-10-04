<?php

use Illuminate\Database\Seeder;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('log')->insert([
            'site_id' => '00001',
            'pm25' => 32,
            'pm10' => 10,
            'co2' => 70,
            'h2o' => 54,
            'o2' => 90,
            'humidity' => 45,
            'door' => false,
            'battery' => true,
            'genset' => false,
            'waterleak' => false,
            'camera' => true
        ]);
    }
}
