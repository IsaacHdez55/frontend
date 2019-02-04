<?php 

class ControladorProductos{

/*=============================================
MOSTRAR CATEGORÍAS
=============================================*/

	public function ctrMostrarCategorias(){

		$tabla = "categorias";

		$respuesta = ModeloProductos::mdlMostrarCategorias($tabla);

		return $respuesta;

	}

/*=============================================
MOSTRAR SUBCATEGORÍAS
=============================================*/

	static public function ctrMostrarSubCategorias($id){

		$tabla = "subcategorias";

		$respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);

		return $respuesta;

	}

}