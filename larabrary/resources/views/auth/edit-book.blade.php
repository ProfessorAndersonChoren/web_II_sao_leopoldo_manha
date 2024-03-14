@extends('layouts.dashboard')

@section('main-content')
    <h1 class="mb-8 text-6xl text-center text-red-950">Editar o livro {{ $book->title }}</h1>
    <form action="{{ route('book.update', $book->id) }}" method="post" class="flex flex-col w-full">
        @csrf
        @method('PUT')
        <label for="isbn" class="custom-label">ISBN do livro:</label>
        <input type="text" id="isbn" name="isbn" class="mb-6 custom-input" value="{{ $book->isbn }}" readonly>
        <label for="title" class="custom-label">Nome do livro:</label>
        <input type="text" id="title" name="title" class="mb-6 custom-input" value="{{ $book->title }}" required>
        <label for="author" class="custom-label">Autor do livro:</label>
        <input type="text" id="author" name="author" class="mb-6 custom-input" value="{{ $book->author }}" required>
        <label for="publisher" class="custom-label">Nome da editora:</label>
        <input type="text" id="publisher" name="publisher" class="mb-6 custom-input" value="{{ $book->publisher }}"
            required>
        <label for="pages" class="custom-label">Número de paginas:</label>
        <input type="number" id="pages" name="pages" class="mb-6 custom-input" required min="1"
            value="{{ $book->pages }}">
        <button type="submit" class="flex items-center justify-center gap-2 custom-button green-button">
            <img src="/imgs/add.svg" alt="Save icon" width="24px">
            <span class="text-base font-bold">Salvar</span>
        </button>
    </form>
@endsection
