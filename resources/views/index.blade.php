@extends('templates.template')

@section('content')
    <h1 class="text-center">Crud</h1><hr>
    <div class="text-center">
        <a href="{{url("books/create")}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
               <th>id</th>
               <th>Título</th>
               <th>Autor</th>
               <th>Preço</th>
               <th>Ação</th>
            </thead>

            <tbody>
                @foreach ($book as $books)
                    @php
                        $user = $books->find($books->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$books->id}}</th>
                        <td>{{$books->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$books->price}}</td>
                        <td>
                            <a href="{{url("books/$books->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("books/$books->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("books/$books->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    
                    
                @endforeach
                
            </tbody>
        </table>

    </div>
@endsection