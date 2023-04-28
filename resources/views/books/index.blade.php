@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="btn btn-primary">
            <a class="btn btn-primary" href="{{route('books.create')}}">Nuovo libro</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Genere</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Numero Copie</th>
                    <th scope="col">Editore</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Elimina</th>
                    <th scope="col">Visualizza</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <th scope="row">
                            {{$book->id}}
                        </th>
                        <td>
                            {{$book->author}}
                        </td>
                        <td>
                           {{$book->genre->name}}
                        </td>
                        <td>
                            {{$book->title}}
                        </td>
                        <td>
                            {{$book->copies_number}}
                        </td>
                        <td>
                            {{$book->editor}}
                        </td>
                        <td>
                            <a href="{{route('books.edit', $book)}}" class="btn btn-warning">
                                Modifica
                            </a>
                        </td>
                        <td>
                            <form action="{{route('books.destroy', $book)}}" method="POST">
                                @csrf 
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                        <td>
                            <a href="{{route('books.show', $book->id)}}" class="btn btn-success">
                                Vedi dettagli
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection