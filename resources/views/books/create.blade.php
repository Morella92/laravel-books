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
        <label for="authors" class="form-label">Autori</label>
          <div class="d-flex @error('authors') is-invalid @enderror flex-wrap gap-3">
            @foreach($authors as $key => $author)
              <div class="form-check">
                <input name="authors[]" @checked( in_array($author->id, old('authors',[]) ) ) class="form-check-input" type="checkbox" value="{{ $author->id }}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  {{ $author->name }}
                </label>
              </div>
            @endforeach
          </div>

          @error('authors')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="genre-id" class="form-label">Genere</label>
        <select class="form-select @error('genre_id') is-invalid @enderror" id="genre-id" name="genre_id" aria-label="Default select example">
          <option value="" selected>Seleziona genere</option>
          @foreach ($genres as $genre)
            <option @selected( old('genre_id') == $genre->id ) value="{{ $genre->id }}">{{ $genre->name }}</option>
          @endforeach
        </select>
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