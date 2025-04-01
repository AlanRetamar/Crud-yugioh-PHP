<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <style>body{font-family: 'Roboto' !important;}</style>


    <title>Lista de productos</title>
</head>
<body>

   <div class="container">
      <div class="text-left mt-5">
         <a href="<?php echo base_url(); ?>LoginCliente" class="btn btn-info"><ion-icon name="arrow-back-outline"></ion-icon></a>
      </div>
      <h1 class="mt-5">Lista de productos</h1>
      <table class="table mt-4">
        <thead class="thead-light">
            <tr>
             <th scope="col">N°</th>   
             <th scope="col">Descripcion</th>   
             <th scope="col">Stock</th>   
             <th scope="col">Precio</th>   
             <th scope="col">Imagen</th>   
            </tr>
        </thead>
        <tbody>
            <?php $number=1; foreach($data as $key => $value): ?>
                <tr>
                    <td scope="row"><?php echo $number++; ?></td>
                    <td><?php echo $value->descripcion ?></td>
                    <td><?php echo $value->stock ?></td>
                    <td><?php echo $value->precio ?></td>
                    <td><img src="<?php echo "./assets/img/".$value->imagen ?>" alt="imagen del producto" width="40" height="60"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
   </div>
    
   <script  type = "module"  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js " > </script> 
   <script  nomodule  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js " > </script>
   </script>
</body>
</html>