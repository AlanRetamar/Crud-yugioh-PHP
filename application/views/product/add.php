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
    <style>
        body {
        padding: 2em;
        font-family: 'Roboto' !important;
        background-color: black !important;
        color: white !important;
        }
    </style>

    <title>Nuevo producto</title>
</head>
<body>
    
      <div class="container">
          <div class="text-left mt-5">
             <a href="<?php echo base_url(); ?>productos" class="btn btn-info"><ion-icon name="arrow-back-outline"></ion-icon></a>
          </div>
          <h1 class="mt-5">Nuevo producto</h1>
          <form action="<?php echo base_url(); ?>nuevo-producto/save" method="post" class="mt-4">
             <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control <?php echo form_error('descripcion') ? 'is-invalid':'' ; ?> "  value="<?php echo set_value('descripcion'); ?>"  placeholder="descripcion">
                        <div class="invalid-feedback">
                          <?php echo form_error('descripcion'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" class="form-control <?php echo form_error('stock') ? 'is-invalid':'' ; ?>" value="<?php echo set_value('stock'); ?>"  placeholder="stock">
                        <div class="invalid-feedback">
                          <?php echo form_error('stock'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" class="form-control <?php echo form_error('precio') ? 'is-invalid':'' ; ?> " value="<?php echo set_value('precio'); ?>" placeholder="precio">
                        <div class="invalid-feedback">
                          <?php echo form_error('precio'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" name="imagen" class="form-control <?php echo form_error('imagen') ? 'is-invalid':'' ; ?>">
                        <div class="invalid-feedback">
                           <?php echo form_error('imagen'); ?>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </div>
             </div>
          </form>
      </div>

      <script  type = "module"  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js " > </script> 
      <script  nomodule  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js " > </script>

      


</body>
</html>