<?php

session_start();
function __autoload($class_name)
{
    require_once '../classes/'.$class_name . '.php';
}

$login = $_POST['email'];
$senha = $_POST['senha'];

$verificalogin = new User('localhost', 'root', '', 'libraslab');

if (!$verificalogin->verificaLogin($login, $senha)) {
    header('Location: ../login.html');
} else {
    $_SESSION['user'] = $email;
    header('Location: ../index.php');
}

