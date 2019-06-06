<?php
require_once "conexion.php";
//la funcionalidad de este archivo es importar el arcvhio correspondiente
//ubicado dentro de la carpeta controlador(definido en la logica de nuestro proyecto)
//ybcargar esl respectivo metodo para mostrar el contenido 
function cargarContenido($cn, $ac){
	//la siguiente linea valida que exista el archivo, en caso de no existe muestra error 001
	if (file_exists("Controlador/".$cn."_controlador.php")){
		require_once "Controlador/".$cn."_controlador.php";
		$obj = $cn."_controlador";  // nombre de la case 
		$instancia = new $obj();
		//valida que el metodo exista en la clase
		//si no existe manda mensaje de erro 002
		if(method_exists($instancia, $ac)) {
		$instancia->$ac(); 
	}else{
		echo "este contenido no exixte 002";
	}
}else{
	echo "este contenido no existe 001";
}
}

if(isset($_GET["controlador"]) && isset($_GET["accion"])){
	$cnt = $_GET["controlador"];
	$acc = $_GET["accion"];
}else{
	$cnt ="inicio";  //cnt = controlador
	$acc = "index";  //acc = accion
// cnt = inicio , acc = index
}
cargarContenido($cnt, $acc);//llamamos el metodo 