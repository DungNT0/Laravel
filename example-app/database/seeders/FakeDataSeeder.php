<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 100;
        
        for ($i=0; $i < $limit; $i++) { 
            DB::table('users')->insert([
                'name' => $faker -> name,
                'email' => $faker -> unique() -> email,
                'contact_number' => $faker -> phoneNumber,
            ]);
        }
    }
}
