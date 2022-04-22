<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 30; $i++){
            $train = new Train();
            
            $train->company = $faker->word();
            $train->departure_station = $faker->state();
            $train->arrival_station = $faker->state();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->isbn10();
            $train->carriages_number = $faker->numberBetween(3,30);
            $train->is_ontime = $faker->numberBetween(0,1);
            $train->deleted = $faker->numberBetween(0,1);
        
            $train->save();
        }
    }
}
