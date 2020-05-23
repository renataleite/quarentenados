<?php
require_once 'tools/connection.php';
require_once 'model/Item.php';

$item = new Item();
$item->title = 'Happy baby';
$item->description = 'A loja para o seu bebé';
$item->link = 'http://happybaby.pt';
$item->type_id = 3;
$item->insert();
