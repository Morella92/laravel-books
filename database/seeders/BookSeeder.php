<?php

namespace Database\Seeders;
use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   

        for ($i = 0; $i < 50; $i++) {

            $genre = [
                'Thriller',
                'Commedia',
                'Horror',
                'Fantasy'
            ];

            $new_book = new Book();
            $new_book->author = $faker->name();
            $new_book->genre = $faker->randomElement($genre);
            $new_book->title = $faker->unique()->sentence($faker->numberBetween(5, 10));
            $new_book->copies_number = $faker->numberBetween(1, 10);
            $new_book->editor = $faker->name();
            $new_book->save();
        }
        
        
        
    }
}
