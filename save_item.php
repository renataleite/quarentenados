<?php
require_once 'model/Item.php';
require_once 'model/ItemType.php';
require_once 'check_login.php';


if (isset($_POST['id']) && $_POST['id'] != '') {
    $item = Item::get($_POST['id']);
    $item->title = $_POST['title'];
    $item->description = $_POST['description'];
    $item->link = $_POST['link'];
    $item->insta_user = $_POST['insta_user'];
    $item->update();

    header("Location: {$BASE_URL}list.php?type={$item->type_id}");
}else{
    if (isset($_POST['title']) && $_POST['title'] != '') {
        $item = new Item();
        $item->title = $_POST['title'];
        $item->description = $_POST['description'];
        $item->link = $_POST['link'];
        $item->insta_user = $_POST['insta_user'];
        $item->type_id = $_GET['type'];
        $item->insert();

    
        header("Location: {$BASE_URL}list.php?type={$item->type_id}");
    }
}

require_once 'view/form.php';
