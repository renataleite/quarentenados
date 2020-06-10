<?php
require_once 'model/Item.php';
require_once 'model/ItemType.php';

$typeId = $_GET['type'];
$type = ItemType::get($typeId);
$items = Item::getByType($typeId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'template/header.php'; ?>
    <title>Quarentenados</title>
</head>

<body>
    <?php
    require_once 'template/menu.php'
    ?>
    <div class="container-fluid">
        <h1><?= $type->name ?></h1>
        <div class="row">
            <?php foreach ($items as $item) { ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                    <div class="card">
                        <img class="card-img-top" src="<?= $item->image ?> " alt="Card image cap" width="">
                        <div class="card-body">
                            <a href="<?= $item->link ?>">
                                <h5 class="card-title"><?= $item->title ?></h5>
                            </a>
                            <p class="card-text"><?= $item->description ?></p>
                            <a href="<?= 'list.php?action=delete&id='.$item->id ?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" stroke-width="2" width="15" height="15"></i></a>
                            <a href="<?= 'save_item.php?id='.$item->id.'&type='.$item->type_id ?>" class="btn btn-sm btn-primary"><i data-feather="edit-3" stroke-width="2" width="15" height="15"></i></a>
                            <br/>
                            <?php if(isset($item->insta_user) && $item->insta_user != ''){ ?>
                                <a href=""><i data-feather="instagram" stroke-width="2" width="15" height="15"></i> <?= $item->insta_user ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php require_once 'template/footer.php'; ?>
</body>

</html>