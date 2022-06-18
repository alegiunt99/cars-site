<?php

use Illuminate\Database\Seeder;

use App\Car;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cars = config('cars');

	    foreach($cars as $car){

            $newCar = new Car();
        
            $newCar->fill($car);

            $newCar->save();
	    }

    }
}
