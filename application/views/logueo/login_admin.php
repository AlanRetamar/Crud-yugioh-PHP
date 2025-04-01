<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <style>
    body {
    padding: 2em;
    font-family: 'Roboto' !important;
    background-color: black !important;
    color: white !important;
    }

    a{
        margin-left: 2em;
    }</style>
    
</head>

<body>
    <ul class="nav nav-pills">
        <?php foreach ($menu as $item): ?>
            <li role="presentation" class="active">
                <a href="<?php echo $item['url'] ?>">
                    <?php echo $item['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>

        <div class="container">
            <br /><br />
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <h3 class="panel-title colorN">LOGIN ADMINISTRADOR</h3>
                    <div class="panel-body">
                        <form action="<?= base_url(); ?>LoginAdmin/ValidarAdmin" method="POST">
                            <p>Ingrese su Usuario</p> <input type="text" autofocus name="usuario" class="form-control"
                                required="" autocomplete="off">
                            <p>Ingrese su Clave</p> <input type="password" name="clave" class="form-control" required=""
                                autocomplete="off">
                            <hr />
                            <button type="submit" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-ok"></span>Entrar</button>
                            <p><br /></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        </div>
        <h1>
            <?php echo ($conforme); ?>
        </h1>
    </ul>
</body>

</html>