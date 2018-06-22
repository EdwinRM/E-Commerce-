<?php
require_once "conexion.php";

class ModeloProductos{
//se vuelve static dado que recibe parametros
//mostrar categorias
static public function mdlMostrarCategorias($tabla){

  $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

  $stmt -> execute();

  return $stmt -> fetchALL(); // recibimos todas las filas

  $stmt -> close();

  $stmt = null; //volvemos nula la conexion

}

//Mostrar subcategorias

static public function mdlMostrarSubCategorias($tabla,$id){

  $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id_categoria = :id_categoria");

  $stmt -> bindParam(":id_categoria", $id,PDO::PARAM_INT);// enlazar parametros

  $stmt -> execute();

  return $stmt -> fetchALL(); // recibimos todas las filas

  $stmt -> close();

  $stmt = null; //volvemos nula la conexion

}

}
