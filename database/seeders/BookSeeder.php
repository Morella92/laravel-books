<?php

namespace Database\Seeders;
use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        $names = ['Giovanni Verdi', 'Francesco Rossi', 'Luigi Bianchi'];
        $genres =['Horror', 'Drama', 'Comedy'];

        foreach($names as $name){

            $promessi_sposi = new Book();
            $new_book->author = randomElement($name);

            $new_book = save();
        };
        
        foreach ($genres as $genre){

            $new_book->genre = randomElement($genre);
        }
        
       
        
    }
}
