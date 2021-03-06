<?php
require_once "conexion.php";

class ModeloProductos{
//se vuelve static dado que recibe parametros
//mostrar categorias
static public function mdlMostrarCategorias($tabla,$item,$valor){

  if($item != null){

  $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
  $stmt -> bindParam(":".$item , $valor,PDO::PARAM_STR);// enlazar parametros
  $stmt -> execute();

  return $stmt -> fetch(); // recibimos todas las filas

  }else{

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    $stmt -> execute();

    return $stmt -> fetchALL(); // recibimos todas las filas
  }

  $stmt -> close();

  $stmt = null; //volvemos nula la conexion

}

//Mostrar subcategorias

static public function mdlMostrarSubCategorias($tabla,$item, $valor){

  $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");

  $stmt -> bindParam(":".$item, $valor,PDO::PARAM_INT);// enlazar parametros

  $stmt -> execute();

  return $stmt -> fetchALL(); // recibimos todas las filas

  $stmt -> close();

  $stmt = null; //volvemos nula la conexion

}

}
