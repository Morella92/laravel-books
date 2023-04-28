<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Validation\Rule;

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

        return view('books.create');
    }

    public function store(Request $request){

        // $data = $request->all();
         
        $data = $request->validate([

            'author' => 'max:50|nullable',
            'genre' => 'required|max:50',
            'title' => 'required|max:100',
            'copies_number' => 'required',
            'editor' => 'required|max:100'
        ]);

        $new_book= Book::create($data);

        return to_route('books.show', $new_book);
    }

    public function edit(Book $book){

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book){

        // $data = $request->all();

        $data = $request->validate([

            'author' => 'max:50|nullable',
            'genre' => 'required|max:50',
            'title' => 'required|max:100',
            'copies_number' => 'required',
            'editor' => 'required|max:100'
        ]);

        $book->update($data);
        
        return to_route('books.show', $book);
    }

    public function destroy(Book $book){

        $book->delete();

        return to_route('books.index');
    }
}
