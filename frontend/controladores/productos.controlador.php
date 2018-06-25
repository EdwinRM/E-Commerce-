<?php
class ControladorProductos{

//Mostrar categorias
static public function ctrMostrarCategorias($item, $valor){

  $tabla = "categorias";
  $respuesta = ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);

  return $respuesta;
}


//mostrar $subcategorias
static public function ctrMostrarSubcategorias($id){

  $tabla = "subcategorias";
  $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla,$id);

  return $respuesta;
}

}
