<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>

<body>
    <form action="auth.php" method="post">
        <label for="user_email">Email: </label>
        <input type="email" name="user_email" id="user_email" required>
        <label for="user_password">Senha: </label>
        <input type="password" name="user_password" id="user_password" required minlength="8">
        <button type="submit">Autenticar</button>
    </form>
    <?php
    session_start();
    if (!empty($_SESSION['msg_login_error'])) :
    ?>
    <p>
        <?= $_SESSION['msg_login_error'] ?>
    </p>
    <?php
    unset($_SESSION['msg_login_error']);
    endif;
    ?>
</body>

</html>