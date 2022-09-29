<?php

use App\SeedTrain;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        

        for ( $i = 0 ; $i<100; $i++){

            $newTrain = new SeedTrain();
            $newTrain->azienda = 'Trenitalia';

            $stazionePartenza = $newTrain->stazione_partenza = $faker->city();
            $stazioneArrivo = $newTrain->stazione_arrivo = $faker-> city();
            
            $orarioPartenza = $newTrain->orario_partenza = $faker-> time();
            $newTrain->orario_arrivo = $faker -> time();

            $newTrain->codice_treno = $faker-> randomElement(['RG','FC','FA']).random_int(100,7000);
            $newTrain->numero_carrozze = rand(2,15);

            $inOrario = $newTrain->in_orario = rand(0,1);
            $newTrain->cancellato = $inOrario?0:1;
            $newTrain->save();
        }
    }
}
