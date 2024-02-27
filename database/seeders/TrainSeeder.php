<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Trains;

class TrainSeeder extends Seeder
{
    
    public function run(): void
    {
        $train = new Trains();
        $train->company = fake()->company();
        $train->station_departures = fake()->country();
        $train->station_arrival = fake()->country();
        $train->departures = fake()->dateTime();
        $train->arrival = fake()->dateTime();
        $train->carriages = fake()->numberBetween(5, 13);
        $train->train_code = fake()->randomNumber(5, true);

        $train->save();
    }
}
