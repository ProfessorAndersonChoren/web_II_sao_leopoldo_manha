@extends('layouts.dashboard')

@section('main-content')
    @if ($errors->all())
        <x-alert context='orange'>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </x-alert>
    @endif
    <h1 class="text-6xl text-center text-red-950">Cadastrar novo livro</h1>
    <form action="{{ route('book.create') }}" method="post" class="flex flex-col w-full">
        @csrf
        <label for="isbn" class="custom-label">ISBN do livro:</label>
        <input type="text" id="isbn" name="isbn" class="mb-6 custom-input" required minlength="13" maxlength="17"
            value="{{ old('isbn') }}">
        <label for="title" class="custom-label">Nome do livro:</label>
        <input type="text" id="title" name="title" class="mb-6 custom-input" required minlength="3"
            value="{{ old('title') }}">
        <label for="author" class="custom-label">Autor do livro:</label>
        <input type="text" id="author" name="author" class="mb-6 custom-input" required minlength="3"
            value="{{ old('author') }}">
        <label for="publisher" class="custom-label">Nome da editora:</label>
        <input type="text" id="publisher" name="publisher" class="mb-6 custom-input" required
            value="{{ old('publisher') }}">
        <label for="pages" class="custom-label">Número de paginas:</label>
        <input type="number" id="pages" name="pages" class="mb-6 custom-input" required min="1"
            value="{{ old('pages') }}">
        <button type="submit" class="flex items-center justify-center gap-2 custom-button green-button">
            <img src="/imgs/add.svg" alt="Save icon" width="24px">
            <span class="text-base font-bold">Salvar</span>
        </button>
    </form>
@endsection
