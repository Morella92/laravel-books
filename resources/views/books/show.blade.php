@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            <li>
                <h1>{{$book->title}}</h1>
            </li>
            <li>
                <p>{{$book->author}}</p>
            </li>
            <li>
                <p>{{$book->genre}}</p>
            </li>
            <li>
                <p>{{$book->copies_number}}</p>
            </li>
            <li>
                <p>{{$book->editor}}</p>
            </li>
        </ul>
    </div>
@endsection