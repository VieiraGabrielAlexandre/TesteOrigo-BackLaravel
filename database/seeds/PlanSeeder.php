<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Free',
            'price' => 0
        ]);

        Plan::create([
            'name' => 'Basic',
            'price' => 100
        ]);

        Plan::create([
            'name' => 'Plus',
            'price' => 187
        ]);



    }
}
