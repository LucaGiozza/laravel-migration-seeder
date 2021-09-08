<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i ++){

            
            $newTrip = new Trip();
            $newTrip->agenzia = 'agenzia numero ' . rand(1,1000);
            $newTrip->durata_viaggio = 'durata viaggio : ' . rand(1,25) . 'giorni';
            $newTrip->prezzo = rand(250, 12000) . 'euro';
             $newTrip->destinazione = 'USA';
            // $newTrip->numero_rimborso = rand(20,750);
            $newTrip->numero_viaggio = rand(125,559);
            $newTrip->description = 'chiamare per ulteriori info';
            
            $newTrip->save();

        }
    }
}
