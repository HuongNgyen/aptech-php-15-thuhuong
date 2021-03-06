<?php

use Illuminate\Database\Seeder;
use App\Phone;

class PhonesTableSeeder extends Seeder
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
        $user =  App\User::pluck('id');
        foreach($user as $key=>$value){
            Phone::create([
                'number'=> $faker->phoneNumber,
                'user_id'=> $value,
            ]);
        }
    }
}
