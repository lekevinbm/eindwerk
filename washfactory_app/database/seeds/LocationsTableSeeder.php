<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Ellermanstraat - kelder', 'street_name' => 'Ellermanstraat', 'street_number' => '12', 'postcode' => '2060','city' => 'Antwerpen','location_code' => 'ELLKEL','description' => 'Het toestel bevindt zich in de kelder van het gebouw',
        ]);

        Location::create([
            'name' => 'Lange Nieuwstraat - kamer 102', 'street_name' => 'Lange Nieuwstraat', 'street_number' => '143', 'postcode' => '2000','city' => 'Antwerpen','location_code' => 'LANGEN','description' => 'De wasruimte bevindt zich op de eerste verdieping',
        ]);

        Location::create([
            'name' => 'Prinsstraat', 'street_name' => 'Prinsstraat', 'street_number' => '64', 'postcode' => '2000','city' => 'Antwerpen','location_code' => 'PRINST','description' => '',
        ]);

        Location::create([
            'name' => 'De Studio', 'street_name' => 'Maarschalk Gerardstraat', 'street_number' => '4', 'postcode' => '2000','city' => 'Antwerpen','location_code' => 'MAADES','description' => '',
        ]);
    }
}
