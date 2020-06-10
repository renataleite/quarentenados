<?php
// Start the session
session_start(); 
$BASE_URL = ' http://locahost/quarentenados/';

if (!isset($_SESSION["logged"]) || $_SESSION["logged"] != true) {
    header("Location: $BASE_URL.'login.php'");
}