<!doctype html>
<html lang="en">

<head>
    <?php require_once 'template/header.php'; ?>
    <link rel="stylesheet" href="resources/css/login.css">
    <title>Quarentenados</title>
</head>

<body class="text-center">

    <form class="form-signin" method="POST" action="controller/AuthenticateController.php">
        <img class="mb-4" src="resources/imgs/logo-qmdpi.png" alt="" width="280" >
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>

        <?php if(isset($_GET['message'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['message']?>
        </div>
        <?php } ?>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Usuário" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar-me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>

    <?php require_once 'template/footer.php'; ?>
</body>

</html>