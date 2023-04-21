@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica libro</h1>  
    </div>
    <div class="container">
        <form action="{{ route('books.update',$book) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"  value="{{old('title',$book->title)}}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author" value="{{old('author',$book->author)}}" >
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genere</label>
                <input type="text" class="form-control" id="genre" name="genre"  value="{{old('genre',$book->genre)}}">
            </div>
            <div class="mb-3">
                <label for="copies_number" class="form-label">Numero copie </label>
                <input type="text" class="form-control" id="copies_number" name="copies_number" value="{{old('copies_number',$book->copies_number)}}">
            </div>
            <div class="mb-3">
                <label for="editor" class="form-label">Editore</label>
                <input type="name" class="form-control" id="editor" name="editor" value="{{old('editor',$book->editor)}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection