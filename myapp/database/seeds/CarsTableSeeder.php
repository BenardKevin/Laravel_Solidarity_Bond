<?php
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\Car', 10)->create();
    }
}