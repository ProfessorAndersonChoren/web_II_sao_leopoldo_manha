<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larabrary - Login</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen bg-red-200">
    <main class="flex flex-col items-center justify-center w-1/2 p-16 bg-white rounded-md">
        <img src="imgs/logo_qi.png" alt="Logo da escola" class="mb-6">
        <form action="#" method="post" class="flex flex-col w-full">
            <label for="email" class="custom-label">Email:</label>
            <input type="email" id="email" name="email" class="mb-6 custom-input" placeholder="seu@email.com.br"
                required>
            <label for="password" class="custom-label">Senha:</label>
            <input type="password" id="password" name="password" class="custom-input" placeholder="********" required>
            <button type="submit" class="custom-button red-button">Entrar</button>
        </form>
    </main>
</body>

</html>
