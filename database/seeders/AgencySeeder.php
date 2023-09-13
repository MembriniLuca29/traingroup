<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agency;
use Faker\Generator as Faker;
use Faker\Guesser\Name;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        foreach(range(1, 20) as $index) {

            Agency::create([
                'name' => $faker->company(),
                'location' => $faker->city(),
                'trains_fleet' => $faker->numberBetween(10, 200)
            ]);
        }
    }
}
