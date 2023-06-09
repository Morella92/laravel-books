@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{$book->title}}</h1>
        <ul class="py-3">
            <li>
                <p>  <span class="fw-bold"> Nomi autori:</span> 
                    @forelse($book->authors as $author)
                        <span class="badge rounded-pill text-bg-light">
                            {{$author->name}}
                        </span>
                    @empty 
                        ----
                    @endforelse
                </p>
            </li>
            <li>
                <p> <span class="fw-bold">Genere libro:</span>  {{$book->genre->name}}</p>
            </li>
            <li>
                <p> <span class="fw-bold">Numero copie:</span>  {{$book->copies_number}}</p>
            </li>
            <li>
                <p> <span class="fw-bold">Editore:</span>  {{$book->editor}}</p>
            </li>

        </ul>

        <div>
            <a href="{{route('books.edit', $book)}}" class="btn btn-warning">
                Modifica
            </a>
        </div>
    </div>
@endsection