<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Quarentenados</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Destaques</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $BASE_URL ?>list.php?type=1">Listar</a>
                    <a class="dropdown-item" href="<?= $BASE_URL ?>save_item.php?type=1">Criar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Notícias</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $BASE_URL ?>list.php?type=2">Listar</a>
                    <a class="dropdown-item" href="<?= $BASE_URL ?>save_item.php?type=2">Criar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Lojas</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $BASE_URL ?>list.php?type=3">Listar</a>
                    <a class="dropdown-item" href="<?= $BASE_URL ?>save_item.php?type=3">Criar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tecnologia</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $BASE_URL ?>list.php?type=4">Listar</a>
                    <a class="dropdown-item" href="<?= $BASE_URL ?>save_item.php?type=4">Criar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Negócios</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $BASE_URL ?>list.php?type=5">Listar</a>
                    <a class="dropdown-item" href="<?= $BASE_URL ?>save_item.php?type=5">Criar</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="form-inline float-right">
        <a class="nav-link text-white" href="controller/logout.php" tabindex="-1" aria-disabled="true"><i data-feather="log-out"></i></a>
    </div>
</nav>