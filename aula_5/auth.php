<?php
if (empty($_POST))
    throw new InvalidArgumentException("Requisição inválida!!!");

$email = $_POST['user_email'];
$password = $_POST['user_password'];

accessVerify($email, $password);

function accessVerify(string $email, string $password): void
{
    $db = [
        [
            'name' => 'Maria Aparecida',
            'email' => 'maria.aparecida@email.com.br',
            'password' => '$2y$10$v9co8dSPfO/20F3PYmmbGOqxh0wkgeYe2PuuVU8fVVOzgvJNrL0my',
            'gender' => 'F'
        ],
        [
            'name' => 'João Paulo',
            'email' => 'joao.paulo@email.com.br',
            'password' => '$2y$10$3h1jfct05mholWqeQl.5gOPADAkl3HGOErajLh.blxNjysdQhOz.S',
            'gender' => 'M'
        ]
    ];
    session_start();
    foreach ($db as $register) {
        if (
            $email == $register['email']
            && password_verify($password, $register['password'])
        ) {
            $_SESSION['user_name'] = $register['name'];
            $_SESSION['user_gender'] = $register['gender'];
            header('location:dashboard.php');
            exit;
        }
    }

    $_SESSION['msg_login_error'] = 'Lamento, usuário ou senha inválidos!!!';
    header('location:index.php');
}
