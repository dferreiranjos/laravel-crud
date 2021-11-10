@extends('templates.template')

@section('content')
    <h1 class="text-center">@if (isset($book)) Editar @else Cadastrar  @endif</h1><hr>
    <div class="col-8 m-auto">
        @if (isset($errors))
            <div class="text-center alert-danger mt-4 mb-4">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        
        @if (isset($book))
            <form id="formEdit" name="formEdit" action="{{url("books/$book->id")}}" method="post">
            @method('PUT')
        @else
            <form id="formCad" name="formCad" action="{{url('books')}}" method="post">
        @endif
            @csrf
            <input type="text" name="title" id="title" class="form-control mb-3" placeholder="Título" value="{{$book->title ?? ''}}">
            <select name="id_user" id="id_user" class="form-control">
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input type="text" name="pages" id="pages" class="form-control mb-3" placeholder="Páginas" value="{{$book->pages ?? ''}}">
            <input type="text" name="price" id="price" class="form-control mb-3" placeholder="Preço" value="{{$book->price ?? ''}}">
            <input type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif" class="btn btn-primary">
        </form>

    </div>
@endsection