@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1><hr>
    <div class="col-8 m-auto">
        @php
            $user = $book->find($book->id)->relUsers;
        @endphp
        Título: {{$book->title}}<br>
        Página: {{$book->pages}}<br>
        Preço: {{$book->price}}<br>
        Autor: {{$user->name}}<br>
        Email autor: {{$user->email}} 
    </div>
@endsection