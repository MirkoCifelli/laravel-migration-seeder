<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Train::truncate();
        
       
        for ($i = 0; $i < 10; $i++) {
            // $dateFaker=fake()->date();
            $dateFaker = '2024-02-27';
            $timeFaker=fake()->time();
            $dateTimeFaker= $dateFaker.' '.$timeFaker;

            $train=new Train();

            $train->company = fake()->name;
            $train->arrival = fake()->name;
            $train->departure = fake()->name;
           
            // $train->arrival_time = $dateTimeFaker;
            $train->arrival_time = fake()->dateTimeBetween($dateTimeFaker,'+1 week');

            $train->departure_time = $dateTimeFaker;
            $train->train_code = rand();
            $train->carriages = fake()->randomDigit();
            $train->on_time= rand(0,1);

            $train->save();

        }      
        
    }
}
