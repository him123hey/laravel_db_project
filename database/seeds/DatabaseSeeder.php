<?php

use Illuminate\Database\Seeder;
Use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            $faker = Faker::create();
            DB::table('students')->insert([
                'name'=>$faker->name,
                'age'=>$faker->numberBetween($min = 10,$max = 50)
            ]);
        }
    }
}
