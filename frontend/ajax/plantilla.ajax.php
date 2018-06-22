<?php
require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

  public function ajaxEstiloPlantilla(){
    $respuesta = ControladorPlantilla::ctrEstilosPlantilla();

  echo json_encode($respuesta); // array en string
  }
}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();
 ?>
