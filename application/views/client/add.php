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

    <title>Nuevo cliente</title>
</head>
<body>
    
      <div class="container">
          <div class="text-left mt-5">
             <a href="<?php echo base_url(); ?>clientes" class="btn btn-info"><ion-icon name="arrow-back-outline"></ion-icon></a>
          </div>
          <h1 class="mt-5">Nuevo cliente</h1>
          <form action="<?php echo base_url(); ?>nuevo-cliente/save" method="post" class="mt-4">
             <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="dni">Dni</label>
                        <input type="text" name="dni" class="form-control <?php echo form_error('dni') ? 'is-invalid':'' ; ?> "  value="<?php echo set_value('dni'); ?>"  placeholder="dni">
                        <div class="invalid-feedback">
                          <?php echo form_error('dni'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control <?php echo form_error('nombre') ? 'is-invalid':'' ; ?>" value="<?php echo set_value('nombre'); ?>"  placeholder="nombre">
                        <div class="invalid-feedback">
                          <?php echo form_error('nombre'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control <?php echo form_error('apellido') ? 'is-invalid':'' ; ?> " value="<?php echo set_value('apellido'); ?>" placeholder="apellido">
                        <div class="invalid-feedback">
                          <?php echo form_error('apellido'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="email" name="mail" class="form-control <?php echo form_error('mail') ? 'is-invalid':'' ; ?> " value="<?php echo set_value('mail'); ?>" placeholder="mail">
                        <div class="invalid-feedback">
                          <?php echo form_error('mail'); ?>
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