<?php


$username = isset($_POST['username'])?$_POST['username']:null;
$password = isset($_POST['password'])?$_POST['password']:null;

if(isset($username) && isset($password)){
    if($username == 'quarentenados' && $password == '@covid'){
        session_start();
        $_SESSION["logged"] = true;
        header('Location: index.php');
        exit;
    }
    header('Location: login.php?message=Usuário ou senha incorretos!');
}

require_once 'view/login.php';