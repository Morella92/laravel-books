<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            'Thriller',
            'Horror',
            'Noir',
            'Comedy',
            'Drama',
            'Documentary'
        ];

        foreach($genres as $genre_name){

            $new_genre = new Genre();

            $new_genre->name = $genre_name;
            $new_genre->save();
        }
    }
}
