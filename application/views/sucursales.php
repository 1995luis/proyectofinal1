<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Contactenos</title>
    <link rel="stylesheet" href="<?php  echo base_url().'css/estilos.css' ?>">
   
</head>

<body background="<?php echo base_url().'imagenes/avion2.jpg'?>">
      <!-- Barra de navegación -->
      <div class="w3-top">
    <div class="w3-bar w3-white w3-wid w3-padding w3-card">
    <a href="<?php  echo base_url().'index.php/hotel/index'?>" class="w3-bar w3-bar-item w3-button">Inicio</a>
    <div class="w3-right w3-hide-small">
        <a href="<?php echo base_url().'index.php/hotel/cargarS' ?>" class="w3-bar w3-bar-item w3-button">Nosotros</a>
        </div>
    </div>
</div>
<?php isset($mg) ? $msg: ''?>
    </body>
    </html>