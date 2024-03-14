<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larabrary - Dashboard</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" module></script>
</head>

<body class="bg-red-200 ">
    <header class="flex items-center justify-between w-full px-8 py-4 bg-red-500">
        <div class="flex items-center gap-4">
            <img src="/imgs/logo_site.png" alt="Logo do site">
            <span class="text-xl font-bold text-white">Larabrary</span>
            <nav>
                <a href="{{route('book.index')}}" class="pr-4 custom-link-menu">Dashboard</a>
                <a href="{{route('book.create')}}" class="custom-link-menu">Cadastrar novo livro</a>
            </nav>
        </div>
        <div id="drop-down" class="flex flex-col items-end">
            <div id="drop-down-icon" class="mb-2">
                <a href="#" id="account-link" class="flex items-center">
                    <span class="mr-4 text-base font-bold text-white">Nome do usuário</span>
                    <img src="/imgs/user.png" alt="Avatar do usuário">
                </a>
            </div>
            <div id="drop-down-menu" class="hidden w-32 p-4 bg-white rounded-md">
                <a href="#" class="custom-link-menu-item">Logout</a>
            </div>
        </div>
    </header>
    <main class="px-32 py-6">
        @yield('main-content')
    </main>
</body>

</html>
