<?php
//Conecta com o banco de dados
function connect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "quarentenados";
    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$db;charset=utf8", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return false;
}

//executa uma instrução sql
function execute($sql)
{
    $conn = connect();
    $result = $conn->query($sql);
    $conn = null;
    return $result;
}