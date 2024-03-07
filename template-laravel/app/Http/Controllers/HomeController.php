<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', ['msg_controller' => 'Mensagem do controlador']);
    }
}
