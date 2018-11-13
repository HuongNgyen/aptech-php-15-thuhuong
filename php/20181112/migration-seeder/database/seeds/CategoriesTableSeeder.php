<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            Category::create([
                'name' => $faker->name,
            ]);
        /*$faker = Faker\Factory::create();
            $limit = 33;
            for ($i = 0; $i < $limit; $i++) {
                DB::table('categories')->insert([ //,
                    'name' => $faker->name,
                ]);*/
        /*Category::create([
            //'name'=>'kinh te'
        ]);*/

    }
}
}

