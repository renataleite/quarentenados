<?php

$stores = Item::getAll();

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
    <h1>Lojas</h1>
    <div class="row">
        <?php foreach ($stores as $store) { ?>
            <div class="col-2 my-2">
                <div class="card" style="">
                    <img class="card-img-top" src="<?= $store->image ?> " alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $store->title ?></h5>
                        <p class="card-text"><?= $store->description ?></p>
                        <a href="<?= $store->link ?>" class="btn btn-primary">Link</a>
                        <a href=""><?= $store->insta_user ?></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>

    <?php require_once 'template/footer.php'; ?>
</body>

</html>