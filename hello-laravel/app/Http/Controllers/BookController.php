<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $books = [
            [
                'title' => 'Dom Casmurro',
                'author' => 'Machado de Assis',
                'publisher' => 'Editora Globo'
            ],
            [
                'title' => 'O silêncio dos inocentes',
                'author' => 'Stephen King',
                'publisher' => 'Editora Abril'
            ]
        ];
        return view('books',compact('books'));
    }
}
