<?php
require_once 'model/Item.php';
require_once 'model/ItemType.php';
require_once 'check_login.php';

function setMessage($message)
{
    $_SESSION['msg'] = $message;
}

function showMessage()
{
    if (isset($_SESSION['msg'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msg']);
    }
}

if (isset($_POST['submit']) && $_POST['submit'] == '1') {
    if ($_POST['id'] != '') {
        $item = Item::get($_POST['id']);
        $item->title = $_POST['title'];
        $item->description = $_POST['description'];
        $item->link = $_POST['link'];
        $item->insta_user = $_POST['insta_user'];

        $upload = $item->upload("fileImage");

        if ($upload['success']) {
            $item->image = empty($upload['file_name']) ? $item->image : $upload['file_name'];
            $item->update();
            header("Location: {$BASE_URL}list.php?type={$item->type_id}");
        } else {
            setMessage($upload['message']);
        }
    } else {
        $item = new Item();
        $item->title = $_POST['title'];
        $item->description = $_POST['description'];
        $item->link = $_POST['link'];
        $item->insta_user = $_POST['insta_user'];
        $item->type_id = $_GET['type'];

        $upload = $item->upload("fileImage");

        if ($upload['success']) {
            $item->image = empty($upload['file_name']) ? $item->image : $upload['file_name'];
            $item->insert();
            header("Location: {$BASE_URL}list.php?type={$item->type_id}");
        } else {
            setMessage($upload['message']);
        }
    }
}

require_once 'view/form.php';
