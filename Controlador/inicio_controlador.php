<?php
class inicio_controlador{
	public function     __construct(){
		require_once "Modelo/producto_modelo.php";
	}

public function index(){
	$datos = producto_modelo::mld_listarProducto();
	require_once "Vista/inicio/index.php";
 }
 public function frmLogin(){
 	require_once "Vista/inicio/frmLogin.php";
 }
  public function CerrarSession(){
 	session_destroy();//esto elimina los datos de session 
 	header("Location: /APP");
}
}