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
            $fakeTrain = new Passenger();
            $fakeTrain->nome = fake()->words(1, true);
            $fakeTrain->cognome = fake()->words(1, true);
            $fakeTrain->stazione_entrata = fake()->words(1, true);
            $fakeTrain->stazione_uscita = fake()->words(1, true);
            $fakeTrain->giorno_di_partenza = fake()->dateTime();
            $fakeTrain->numero_posto = rand(1, 300);           
            
            $fakeTrain->save();
            
            
    }
}
}