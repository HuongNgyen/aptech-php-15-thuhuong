<?php

use Illuminate\Database\Seeder;
use App\Passport;

class PassportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            Passport::create([
                'number' => $faker->creditCardNumber,
            ]);
        }
    }
}
