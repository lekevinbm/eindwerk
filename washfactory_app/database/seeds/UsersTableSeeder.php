<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['firstname' => 'Kevin', 'lastname' => 'Bavuidi', 'email' => 'kevin@washfactory.be', 'password' => Hash::make('secret'), 'date_of_birth' => '1993-07-27','street_name' => 'Tuyaertsstraat','street_number' => '17','postcode' =>'2850','city'=>'Boom', 'credits' => 100]);
        $user->assignRole('Administrator');

        $user = User::create(['firstname' => 'Pieter', 'lastname' => 'De Conick', 'email' => 'admin@washfactory.be', 'password' => Hash::make('secret'), 'date_of_birth' => '1993-07-27','street_name' => 'Fruithoflaan','street_number' => '77','postcode' =>'2600','city'=>'Berchem', 'credits' => 100]);
        $user->assignRole('Administrator');

        $user = User::create(['firstname' => 'Peter', 'lastname' => 'Timmermans', 'email' => 'peter@washfactory.be', 'password' => Hash::make('secret'), 'date_of_birth' => '1993-08-27','street_name' => 'Appelstraat','street_number' => '9','postcode' =>'2140','city'=>'Borgerhout']);
        $user->assignRole('User');

        $user = User::create(['firstname' => 'Tom', 'lastname' => 'Peeters', 'email' => 'user@washfactory.be', 'password' => Hash::make('secret'), 'date_of_birth' => '1993-08-12','street_name' => 'Ellermanstraat','street_number' => '113','postcode' =>'2060','city'=>'Antwerpen']);
        $user->assignRole('User');
    }
}