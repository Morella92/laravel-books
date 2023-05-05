<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors= [
            'Giggino Esposito',
            'Anita Biviano',
            'Verando Dimarzio',
            'Morena Piemontese',
            'Gioacchino Pilipetto',
            'Giuseppe Certo',
            'Simone Buzzeo',
            'Paolo Castaldi',
            'Giovanni Righini'
        ];

        foreach($authors as $author_name){

            $author = new Author();
            $author->name = $author_name;
            $author->slug = Str::slug($author_name);
            $author->save();
        }
        
    }
}
