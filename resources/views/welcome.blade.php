@extends('layouts.app')

@section('content')
    <div class="container position">
        <div class="row welcome">
            <div class="col-12">
                <h1 class="text-uppercase text-center py-5">Negozio di libri</h1>
                <div class="text-center">
                    <a href="{{route('books.index')}}">
                        Vai al negozio
                    </a>
                </div> 
            </div>
        </div>
    </div>
@endsection