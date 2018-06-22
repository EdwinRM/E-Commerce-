<?php
class ControladorProductos{

//Mostrar categorias
public function ctrMostrarCategorias(){

  $tabla = "categorias";
  $respuesta = ModeloProductos::mdlMostrarCategorias($tabla);

  return $respuesta;
}


//mostrar $subcategorias
static public function ctrMostrarSubcategorias($id){

  $tabla = "subcategorias";
  $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla,$id);

  return $respuesta;
}

}
