<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// models 
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $trains = [];


        foreach ($trains as $train){
            $newTrain = new train();
            $newTrain->name = $train['name'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();

        }
    }
}
