<?php

namespace Database\Seeders;
use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Genre;
use App\Models\Author;



class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $genre_ids = Genre::all() ->pluck('id')->all();
        $author_ids = Author::all()->pluck('id')->all();

        for ($i = 0; $i < 50; $i++) {

            $new_book = new Book();
            $new_book->author = $faker->name();
            $new_book->title = $faker->unique()->sentence($faker->numberBetween(5, 10));
            $new_book->copies_number = $faker->numberBetween(1, 10);
            $new_book->editor = $faker->name();
            $new_book->genre_id = $faker->randomElement($genre_ids);
            $new_book->save();

            $new_book->authors()->attach($faker->randomElements($author_ids, rand(1, 3)));
        }
    }
}
