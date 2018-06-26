<?php
class ControladorProductos{

//Mostrar categorias
static public function ctrMostrarCategorias($item, $valor){

  $tabla = "categorias";
  $respuesta = ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);

  return $respuesta;
}


//mostrar $subcategorias
static public function ctrMostrarSubcategorias($item, $valor){

  $tabla = "subcategorias";
  $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $item, $valor);

  return $respuesta;
}

}
