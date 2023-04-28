@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{$book->title}}</h1>
        <ul class="py-3">
            <li>
                <p> <span class="fw-bold"> Nome autore:</span>  {{$book->author}}</p>
            </li>
            <li>
                <p> <span class="fw-bold">Genere libro:</span>  {{$book->genre}}</p>
            </li>
            <li>
                <p> <span class="fw-bold">Numero copie:</span>  {{$book->copies_number}}</p>
            </li>
            <li>
                <p> <span class="fw-bold">Editore:</span>  {{$book->editor}}</p>
            </li>
        </ul>
    </div>
@endsection