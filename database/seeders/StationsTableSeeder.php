<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Station::truncate();
        
        for ($i=0; $i < 10; $i++) { 
            
            $station = new Station();
            $station->location = fake()->city();
            $station->ticket_resale = rand(0, 1);
            $station->snack_bar = rand(0, 1);
            $station->save();
        }
    }
}
