<?php

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
        $seedtrains = [

        ];

        foreach ($seedtrains as $seedtrain){
            $newTrain = new Train();
            $newTrain->name = $seedtrain['name']; 
            $newTrain->save();
        }
    }
}
