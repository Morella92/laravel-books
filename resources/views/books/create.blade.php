@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Crea nuovo libro</h1>
  </div>
  <div class="container">
    <form action="{{ route('books.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title"  value="{{old('title')}}">
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}" >
      </div>
      <div class="mb-3">
        <label for="genre" class="form-label">Genere</label>
        <input type="text" class="form-control" id="genre" name="genre"  value="{{old('genre')}}">
      </div>
      <div class="mb-3">
        <label for="copies_number" class="form-label">Numero copie</label>
        <input type="text" class="form-control" id="copies_number" name="copies_number" value="{{old('copies_number')}}">
      </div>
      <div class="mb-3">
        <label for="editor" class="form-label">Editore</label>
        <input type="name" class="form-control" id="editor" name="editor" value="{{old('editor')}}">
      </div>
          
          <button type="submit" class="btn btn-primary">Salva</button>
    </form>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
  </div>
@endsection