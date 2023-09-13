<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



use App\Models\Passenger;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passenger::truncate();
        for ($i = 0; $i < 100; $i++){
            $fakePassenger = new Passenger();
            $fakePassenger->nome = fake()->words(1, true);
            $fakePassenger->cognome = fake()->words(1, true);
            $fakePassenger->stazione_entrata = fake()->words(1, true);
            $fakePassenger->stazione_uscita = fake()->words(1, true);
            $fakePassenger->giorno_di_partenza = fake()->dateTime();
            $fakePassenger->numero_posto = rand(1, 300);           
            
            $fakePassenger->save();
            
    }
}
}