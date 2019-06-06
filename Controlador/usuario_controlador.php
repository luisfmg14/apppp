<?php

class usuario_controlador{
	public function     __construct(){
		require_once "Modelo/usuario_modelo.php";
	}
	public static function validarDatos(){
		if(isset($_SESSION['USU_ID'])){
			if($_SESSION['USU_ROL']==2){
				header("Location: /APP");
			}
		}else{
			header("Location: /APP");
		}
		
	}
	public function lisUsuario(){
		usuario_controlador::validarDatos();
		$datos = usuario_modelo::mld_listarUsuario();
		require_once "Vista/usuario/listadoUsuarios.php";
	}
	public function fromCrearUsuario(){
		usuario_controlador::validarDatos();
		require_once "Vista/usuario/crearUsuario.php";
	}
	//el siguiente metodo gestionara los datos del formulario 
	//enviandolos al modelo
	public function regUsuario(){
		usuario_controlador::validarDatos();
		extract($_POST);
		$respuesta = usuario_modelo::mdl_regUsuario($nombre, $correo, $telefono);
		if ($respuesta == 1){
			echo "<br/>Se ha registrado un nuevo usuario";
		}else{
			echo "<br />Error al registrar";
		}
	}
		public function eliminar(){
			usuario_controlador::validarDatos();
		// ei el id existe en la url, entra en el sino
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$r = usuario_modelo::mld_eliminarUsuario($id);
		//una ves cuando se elimine lo redireccionamos al listado 
		header("Location: ?controlador=usuario&accion=lisUsuario");
		}else{
		header("Location: /APP");
	}
	}
	public function frmEditar(){
		usuario_controlador::validarDatos();
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$datos = usuario_modelo::mld_consultarUsuarioByID($id);
		require_once "Vista/usuario/frmEditar.php";
	}else{
		header("Location: /APP");
	}
	}
	public function edtUsuario(){
		usuario_controlador::validarDatos();
		extract($_POST);
		$r = usuario_modelo::mdl_editarUsuario($nombre,$correo,$telefono,$id);
		if($r > 0){
			echo "se ha editado el usuario";
		}else{
			echo "error en la edicion";
		}	
	}
	public function validar(){
 	extract($_POST);
 	$r = usuario_modelo::mld_validarUsuario($usuario, $password);
 	if ($r > 0){
 		$_SESSION['USU_NOMBRE']=$r['USU_NOMBRE'];
 		$_SESSION['USU_ROL']=$r['USU_ROL'];
 		$_SESSION['USU_ID']=$r['USU_ID'];
 		echo json_encode(array("texto" => "OK", "success" => 1));
 	}else{
 		echo json_encode(array("texto" => "Usuario y contraseña incorrecta", "success" => 2));
 	}
  }
} 