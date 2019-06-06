<div class="row">
	<div class="col-md-12">
<a href="?controlador=producto&accion=fromCrearProducto"class="btn btn-primary" >Crear producto</a>
<br/> <br />

<?php
echo "<table class='table table-hover table-bordered'>";echo "<tr>";
echo "<td >ID---</td>";
echo "<th>NOMBRE</th>";
echo "<th>PRECOIO</th>";
echo "<th>DESCRIPCION</th>";
echo "<th>FOTO</th>";
echo "<th>EDITAR</th>";
echo "<th>ELIMINAR</th>";
echo "<tr>";
foreach ($datos as $key => $value) {
	# code...

echo "<tr>";
echo "<td>".$value['pro_id']."</td>";
echo "<td>".$value['pro_nombre']."</td>";
echo "<td>".$value['pro_precio']."</td>";
echo "<td>".$value['pro_descripcion']."</td>";
echo "<td>".$value['pro_foto']."</td>";
echo "<td><a href='?controlador=producto&accion=frmEditar&id=".$value['pro_id']."'>editar</a></td>";
echo"</td>";
echo"</td>";
echo "<td><a href='?controlador=producto&accion=eliminar&id=".$value['pro_id']."'>Eliminar</a></td>";
echo"</td>";

echo "<tr>";
}

echo "</table>";
?>
</div>  <!--columna-->
</div>  <!--fila   -->