<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Validation\Rule;
use App\Models\Genre;
use App\Models\Author;

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
        $authors = Author::orderBy('name', 'asc')->get();

        return view('books.create', compact('genres', 'authors'));
    }

    public function store(Request $request){

        // $data = $request->all();
         
        $data = $request->validate([

            'author' => 'max:50|nullable',
            'title' => 'required',
            'copies_number' => 'required',
            'editor' => 'required|max:100',
            'genre_id' => 'required',
            'authors' => 'exists:authors,id'
        ]);

        $new_book= Book::create($data);

        if(isset($data['authors'])){
            $new_book->authors()->attach($data['authors']);
        };

        return to_route('books.show', $new_book);
    }

    public function edit(Book $book){

        $genres = Genre::orderBy('name', 'asc')->get();
        $authors = Author::orderBy('name', 'asc')->get();

        return view('books.edit', compact('book', 'genres', 'authors'));
    }

    public function update(Request $request, Book $book){

        // $data = $request->all();

        $data = $request->validate([

            'author' => 'max:50|nullable',
            'title' => 'required',
            'copies_number' => 'required',
            'editor' => 'required|max:100',
            'genre_id' => 'required',
            'authors' => 'exists:authors,id'
        ]);

        $book->update($data);

        if(isset($data['authors'])){
            $book->authors()->sync($data['authors']);
        };
        
        return to_route('books.show', $book);
    }

    public function destroy(Book $book){

        $book->delete();

        return to_route('books.index');
    }
}
