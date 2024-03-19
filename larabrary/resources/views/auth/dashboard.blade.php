@extends('layouts.dashboard')

@section('main-content')
    @if (empty($books->all()))
        <x-alert context='orange'>
            <p>Não existem livros cadastrados</p>
        </x-alert>
    @else
        <table class="w-full ">
            <caption class="text-6xl text-center my-9 text-red-950">Lista de livros cadastrados</caption>
            <thead class="bg-red-500">
                <th>ISBN</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>Número de paginas</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($books->all() as $book)
                <tr>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->pages}} páginas</td>
                    <td class="action-td">
                        <a href="{{route('book.edit',$book->id)}}" class="flex items-center gap-2 action-button orange-button">
                            <img src="imgs/edit.svg" alt="Edit icon" width="20">
                            <span class="text-base font-bold">Editar</span>
                        </a>
                        <a href="{{route('book.delete',$book->id)}}" class="flex items-center gap-2 action-button red-button">
                            <img src="imgs/delete.svg" alt="Delete icon" width="20">
                            <span class="text-base font-bold">Deletar</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
