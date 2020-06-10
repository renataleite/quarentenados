<?php


$username = $_POST['username'];
$password = $_POST['password'];

if(isset($username) && isset($password)){
    if($username == 'quarentenados' && $password == '@covid'){
        session_start();
        $_SESSION["logged"] = true;
        header('Location: http://localhost/quarentenados/?view=home');
        exit;
    }
}
header('Location: http://localhost/quarentenados/?view=login&message=Usuário ou senha incorretos!');
