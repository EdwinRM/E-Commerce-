<?php
require_once "../controladores/controlador.php";
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

  public function ajaxEstiloPlantilla(){
    $respuesta = ControladorPlantilla::ctrEstiloPlantilla();

  echo json_encode($respuesta); // array en string
  }
}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();
 ?>
