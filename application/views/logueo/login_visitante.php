<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <style>body{font-family: 'Roboto' !important;}</style>
    <title>Login Visitante</title>
    <style>
        a{
            margin-left: 2em;
        }
        
        div a{
            margin-left: 10em;
        }
    </style>
</head>
<body>
    <ul class="nav nav-pills mt-5">
        <?php foreach($menu as $item):?>
            <li role="presentation" class="active">
                <a href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a>
            </li>
        <?php endforeach;?>
        <div style="margin-left: 2em;">
            <a href="<?php echo base_url(); ?>usuarios" class="btn btn-info">Ingresar</a>
      </div>
    </ul>
</body>
</html>