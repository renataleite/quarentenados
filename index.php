<?php
require_once 'tools/connection.php';
require_once 'model/Item.php';

$view = $_GET['view'];
require_once 'view/'.$view.'.php';