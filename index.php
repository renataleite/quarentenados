<?php
// Start the session
session_start();

require_once 'tools/connection.php';
require_once 'model/Item.php';

if (!isset($_SESSION["logged"]) || $_SESSION["logged"] != true) {
    $view = 'login';
} else {
    if (isset($_GET['view']) && $_GET['view'] == 'login') {
        header('Location: http://localhost/quarentenados/?view=home');
    }
    $view = !isset($_GET['view']) ? 'home' : $_GET['view'];
}
require_once 'view/' . $view . '.php';
