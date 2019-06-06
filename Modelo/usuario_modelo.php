<?php
class usuario_modelo{
	//el siguiente guardara un usuario en la Base de datos 
	public static function mdl_regUsuario($nombre, $correo, $telefono){
		$con = conexion::getConexion();
		$fecha = date ("Y-m-d");

 		$encriptar= sha1($telefono);
 		// sha1, md5 pero no son seguros
 		// hast_password() : investigar
		$query = "INSERT INTO t_usuario
		(USU_NOMBRE, USU_CORREO, USU_TELEFONO, USU_PASSWORD, USU_ROL, USU_FCH_RGT)
		VALUES
		('$nombre', '$correo', $telefono, '$encriptar', 2, '$fecha')";
		
		$consulta = $con->prepare($query);


		

		$r = $consulta->execute();
		return $r;		

	}

	public static function mld_listarUsuario(){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_usuario";
		$consulta = $con->prepare($query);
		$consulta->execute();
		$datos = $consulta->fetchAll();
		return $datos;
	}
	public static function mld_eliminarUsuario($id){
		$con = conexion::getConexion();
		$query = "DELETE FROM t_usuario WHERE USU_ID = $id";
		$consulta = $con->prepare($query);
		$r = $consulta->execute();
		return $r;
	}
	public static function mld_consultarUsuarioByID($id){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_usuario WHERE USU_ID = $id";
		$consulta = $con->prepare($query);
		$consulta->execute();
		$datos = $consulta->fetch();
		return $datos;
	}
	public static  function mdl_editarUsuario($nombre,$correo,$telefono,$id){
		$con = conexion::getConexion();
		$query = "UPDATE t_usuario SET
		USU_NOMBRE = '$nombre' ,
		USU_CORREO = '$correo' ,
		USU_TELEFONO = $telefono
		WHERE USU_ID = $id";
		$consulta = $con->prepare($query);
		$r = $consulta->execute();
		return $r;
	}
	public static function mld_validarUsuario($usuario, $password){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_usuario
					WHERE USU_CORREO = '$usuario' AND
					USU_PASSWORD ='".sha1($password)."'";
	    $consulta = $con->prepare($query);
	    $consulta ->execute();
	    $datos = $consulta ->fetch();
	    return $datos;
	}
}//CLASE
