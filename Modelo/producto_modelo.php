<?php
class producto_modelo{
	//el siguiente guardara un usuario en la Base de datos 
	public static function mdl_regProducto($nombre, $precio, $descripcion){
		$con = conexion::getConexion();
		$fecha = date ("Y-m-d");

		$query = "INSERT INTO t_producto
		(pro_nombre, pro_precio, pro_descripcion, pro_fch_rgt)
		VALUES
		('$nombre', $precio, '$descripcion', '$fecha')";
		
		$consulta = $con->prepare($query);

		$r = $consulta->execute();
		return $r;		

	}
	public static function mld_listarProducto(){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_producto";
		$consulta = $con->prepare($query);
		$consulta->execute();
		$datos = $consulta->fetchAll();
		return $datos;
	}
	public static function mld_eliminarProducto($id){
		$con = conexion::getConexion();
		$query = "DELETE FROM t_producto WHERE pro_id = $id";
		$consulta = $con->prepare($query);
		$r = $consulta->execute();
		return $r;
	}
		public static function mld_consultarProductoByID($id){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_producto WHERE pro_id = $id";
		$consulta = $con->prepare($query);
		$consulta->execute();
		$datos = $consulta->fetch();
		return $datos;
	}
	public static  function mdl_editarProducto($nombre,$precio,$descripcion,$id){
		$con = conexion::getConexion();
		$query = "UPDATE t_producto SET
		pro_nombre = '$nombre' ,
		pro_precio = $precio ,
		pro_descripcion = '$descripcion'
		WHERE pro_id = $id";
		$consulta = $con->prepare($query);
		$r = $consulta->execute();
		return $r;
	}
}