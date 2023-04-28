<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Validation\Rule;
use App\Models\Genre;

class BookController extends Controller
{
    public function index(){

        $books= Book::all();

        return view('books.index', compact('books'));
    }

    public function show(Book $book){

        return view('books.show', compact('book'));
    }

    public function create(){

        $genres = Genre::orderBy('name', 'asc')->get();

        return view('books.create', compact('genres'));
    }

    public function store(Request $request){

        // $data = $request->all();
         
        $data = $request->validate([

            'author' => 'max:50|nullable',
            'title' => 'required',
            'copies_number' => 'required',
            'editor' => 'required|max:100',
            'genre_id' => 'required'
        ]);

        $new_book= Book::create($data);

        return to_route('books.show', $new_book);
    }

    public function edit(Book $book){

        $genres = Genre::orderBy('name', 'asc')->get();

        return view('books.edit', compact('book', 'genres'));
    }

    public function update(Request $request, Book $book){

        // $data = $request->all();

        $data = $request->validate([

            'author' => 'max:50|nullable',
            'title' => 'required',
            'copies_number' => 'required',
            'editor' => 'required|max:100',
            'genre_id' => 'required'
        ]);

        $book->update($data);
        
        return to_route('books.show', $book);
    }

    public function destroy(Book $book){

        $book->delete();

        return to_route('books.index');
    }
}
