<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = Client::create([
            'name' => 'Claudianus Boast',
            'email' => 'cboast0@fastcompany.com',
            'telephone' => '(19) 957645371',
            'city' => 'Araraquara',
            'state' => 'São Paulo',
            'born_date' => '1993-06-07'
        ]);

        $client->plans()->attach(1);

        $client = Client::create([
            'name' => 'Loni Jennions',
            'email' => 'ljennions1@va.gov',
            'telephone' => '(19) 905613161',
            'city' => 'Limeira',
            'state' => 'São Paulo',
            'born_date' => '1985-05-09'
        ]);

        $client->plans()->attach(2);

         $client = Client::create([
            'name' => 'Margi Gilhouley',
            'email' => 'mgilhouley2@telegraph.co.uk',
            'telephone' => '(19) 957645371',
            'city' => 'Araraquara',
            'state' => 'São Paulo',
            'born_date' => '1993-06-07'
        ]);

        $client->plans()->attach(3);


         $client = Client::create([
            'name' => 'Lexy Sprulls',
            'email' => 'lsprulls3@moonfruit.com',
            'telephone' => '(19) 976121601',
            'city' => 'Rio Claro',
            'state' => 'São Paulo',
            'born_date' => '1999-10-19'
        ]);

        $client->plans()->attach(3);


         $client = Client::create([
            'name' => 'Marie Shatliff',
            'email' => 'mshatliff4@cbslocal.com',
            'telephone' => '(19) 991376354',
            'city' => 'Rio Claro',
            'state' => 'São Paulo',
            'born_date' => '1990-07-20'
        ]);

        $client->plans()->attach(1);


        $client = Client::create([
            'name' => 'Graig Mouncey',
            'email' => 'gmouncey5@so-net.ne.jp',
            'telephone' => '(19) 941806149',
            'city' => 'Araraquara',
            'state' => 'São Paulo',
            'born_date' => '1990-03-27'
        ]);

        $client->plans()->attach(2);




    }
}
