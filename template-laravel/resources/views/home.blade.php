@extends('templates.app')

@section('title', 'Página inicial')

@section('content')
    <h1 class="text-center">Bem-vindo ao meu site</h1>
    <x-meu-alerta message='Erro' context='danger' />
    <x-meu-alerta message='Sucesso' context='success' />
    <x-meu-alerta message='Informação' context='info' />
    <x-meu-alerta message='Sem contexto' />
    <hr>
    <h2>Mensagem vinda do Controller</h2>
    <x-meu-alerta :message=$msg_controller />
    <x-meu-alerta message={{$msg_controller}} />
@endsection
