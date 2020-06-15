<?php
require_once 'model/Item.php'; 
require_once 'model/ItemType.php';
require_once 'tools/check_login.php';


if(isset($_GET['action']) && $_GET['action']=='delete'){
    $item = Item::get($_GET['id']);
    Item::delete($item->id);
    header("Location: {$BASE_URLlist}list.php/?type=$item->type_id");
}

require_once 'view/list.php';