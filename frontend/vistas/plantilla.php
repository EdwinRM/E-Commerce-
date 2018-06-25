<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    	<meta name="title" content="Tienda Virtual">

    	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia">

    	<meta name="keyword" content="Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse">

    	<title>Tienda Virtual</title><meta name="viewport" content="">

<?php
 $icono = ControladorPlantilla::ctrEstilosPlantilla();

 echo '<link rel="icon" href="http://localhost/backend/'. $icono["icono"].'">';

//mantener ruta fija del proyecto

$url =Ruta :: ctrRuta();
//var_dump($url);
?>

      <link rel="stylesheet" href="<?php  echo $url;?>vistas/css/plugins/bootstrap.min.css">

      	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

      	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

      	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

        <link rel="stylesheet" href="<?php  echo $url;?>vistas/css/plantilla.css">

        <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezal.css">

      	<script src="<?php  echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

      	<script src="<?php  echo $url;?>vistas/js/plugins/bootstrap.min.js"></script>



  </head>
  <body>
    <?php
    include "modulos/cabezal.php";

    $rutas = array();
    $ruta = null;

    if(isset($_GET["ruta"])){

      $rutas = explode("/",$_GET["ruta"]);

      $item="ruta";
      $valor= $rutas[0];

      $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

      if($rutas[0] == $rutaCategorias["ruta"]){
        $ruta = $rutas[0];
      }

      if($ruta != null){
        include "modulos/productos.php";
      }else{
           include "modulos/error404.php";
      }
    }
     ?>
       <script src="vistas/js/plantilla.js"></script>
     <script src="vistas/js/cabezal.js"></script>
  </body>
</html>
