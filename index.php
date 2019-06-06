<?php
session_start();

 $URL = "http://localhost/APP";

if(!isset($_GET['op'])){
	require_once "Vista/plantilla.php";
}else{
	require_once "rutas.php";
}