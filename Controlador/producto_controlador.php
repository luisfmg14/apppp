<?php

class producto_controlador{
	public function     __construct(){
		if(isset($_SESSION['USU_ID'])){
			if($_SESSION['USU_ROL']==2){
				header("Location: /APP");
			}
		}else{
			header("Location: /APP");
		}
		require_once "Modelo/producto_modelo.php";
	}
	public function lisProducto(){
		$datos = producto_modelo::mld_listarProducto();
		require_once "Vista/producto/listadoProducto.php";
	}
	public function fromCrearProducto(){
		require_once "Vista/producto/crearProducto.php";
	}
	//el siguiente metodo gestionara los datos del formulario 
	//enviandolos al modelo
	public function regProducto(){
		extract($_POST);
         
        $ruta = "Recursos/imagen/";
        $nombre_foto = $_FILES["foto"]["name"];
        $nombre_tmp = $_FILES ["foto"]["tmp_name"];

        if (move_uploaded_file($nombre_tmp, $ruta."".$nombre_foto)){
		$respuesta = producto_modelo::mdl_regProducto($nombre, $precio, $descripcion, $nombre_foto);
		if ($respuesta == 1){
			echo "<br/>Se ha registrado un nuevo producto";
		}else{
			echo "<br />Error al registrar";
		}
	}
}
		public function eliminar(){
		// ei el id existe en la url, entra en el sino
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$r = producto_modelo::mld_eliminarProducto($id);
		//una ves cuando se elimine lo redireccionamos al listado 
		header("Location: ?controlador=producto&accion=lisProducto");
		}else{
		header("Location: /APP");
	}
	}
	public function frmEditar(){
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$datos = producto_modelo::mld_consultarProductoByID($id);
		require_once "Vista/producto/frmEditar.php";
	}else{
		header("Location: /APP");
	}
	}
	public function edtProducto(){
		extract($_POST);
		$r = producto_modelo::mdl_editarProducto($nombre,$precio,$descripcion,$id);
		if($r > 0){
			echo "se ha editado el producto";
		}else{
			echo "error en la edicion";
		}	
	}	
} 

//loquesea' OR USU_NOMBRE