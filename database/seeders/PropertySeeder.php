<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property = new Property();
        $property->name = 'Catamarán';
        $property->city = 'Cartagena';
        $property->address = 'carrera 98 #12-34';
        $property->description = 'Apartamento 1001 en Cartagena';
        $property->area = 43;
        $property->capacity = 5;
        $property->dailyRent = 180.444;
        $property->user_id = 1;
        $property->save();

        $property = new Property;
        $property->name = 'Plantón';
        $property->city = 'Cali';
        $property->description = 'Penthouse en La Cali';
        $property->area = 43;
        $property->capacity = 5;
        $property->address = 'carrera 100 #65-34';
        $property->dailyRent = 900.444;
        $property->user_id = 1;
        $property->save();

        $property = new Property;
        $property->name = 'Cacaracho';
        $property->city = 'Cartagena';
        $property->description = 'Penthouse en La Cartagena';
        $property->area = 43;
        $property->capacity = 5;
        $property->address = 'carrera 234 #62N-34';
        $property->dailyRent = 900.444;
        $property->user_id = 2;
        $property->save();

        $property = new Property;
        $property->name = 'Pancho';
        $property->city = 'Bogotá';
        $property->description = 'Penthouse en Bogotá';
        $property->area = 43;
        $property->capacity = 5;
        $property->address = 'carrera 22 #10-34';
        $property->dailyRent = 900.444;
        $property->user_id = 3;
        $property->save();
    }
}