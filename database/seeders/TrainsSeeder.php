<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//aggiungo il faker
use Faker\Generator as Faker;
//aggiungo il model singolo
use App\Models\Train;


class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
            $newTrain = new Train();

            $newTrain->azienda = $faker->name();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->dateTimeBetween('-1 month','+1 month');
            $newTrain->orario_arrivo = $faker->dateTimeBetween();
            $newTrain->codice_treno = $faker->bothify('t-###');


            $newTrain->save();

        }


    }
}
