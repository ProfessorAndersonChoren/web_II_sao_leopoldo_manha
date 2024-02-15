<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área administrativa</title>
</head>

<body>
    <?php session_start(); ?>
    <h1>
        <?= ($_SESSION['user_gender'] == 'M') ? 'Bem-vindo ' : 'Bem-vinda ' ?>
        <?= $_SESSION['user_name'] ?>
    </h1>
</body>

</html>