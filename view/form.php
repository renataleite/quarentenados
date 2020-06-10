<?php
require_once 'model/Item.php';
require_once 'model/ItemType.php';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $item = Item::get($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'template/header.php'; ?>
    <title>Quarentenados</title>
</head>

<body>
    <?php require_once 'template/menu.php' ?>
    <div class="container-fluid">
        <h1>Novo Item</h1>
        <?php showMessage() ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input name="id" type="hidden" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">

            <div class="input-group mb-3">
                <div class="custom-file">
                    <input name="fileImage" type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="fileImage">Selecione uma imagem</label>
                </div>
            </div>

            <div class="form-group">
                <label for="title">Título</label>
                <input name="title" value="<?= isset($item->title) ? $item->title : '' ?>" type="text" class="form-control" placeholder="Título do item">
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <input name="description" value="<?= isset($item->description) ? $item->description : '' ?>" type="text" class="form-control" placeholder="Descrição do item">
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input name="link" value="<?= isset($item->link) ? $item->link : '' ?>" type="text" class="form-control" placeholder="Link do Site">
            </div>

            <div class="form-group">
                <label for="insta_user">Recomendado por</label>
                <input name="insta_user" value="<?= isset($item->insta_user) ? $item->insta_user : '' ?>" type="text" class="form-control" placeholder="Instagram user">
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="1">Enviar</button>
        </form>

    </div>

    <?php require_once 'template/footer.php'; ?>
</body>

</html>