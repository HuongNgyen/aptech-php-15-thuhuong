<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class PostsTableSeeder extends Seeder
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
        $limit = 10;
        
        for ($i = 0; $i < $limit; $i++){
            Post::create([
                'title'=>$faker->name,
                'description'=>$faker->sentence,
                'content'=>$faker->paragraph,
                //'category_id'=>$faker->numberBetween($min = 1, $max = 11),
                'category_id'=>$faker->randomDigitNotNull
            
            ]);
        }
    }
}
