<div class="row">
	<div class="col-md-12">
<a href="?controlador=usuario&accion=fromCrearUsuario"class="btn btn-primary">Crear usuario</a>
<br/> <br />

<?php
echo "<table class='table table-hover table-bordered'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NOMBRES</th>";
echo "<th>CORREO</th>";
echo "<th>TELEFONO</th>";
echo "<th>EDITAR</th>";
echo "<th>ELIMINAR</th>";
echo "<tr>";
foreach ($datos as $key => $value) {
echo "<tr>";
echo "<td>".$value['USU_ID']."</td>";
echo "<td>".$value['USU_NOMBRE']."</td>";
echo "<td>".$value['USU_CORREO']."</td>";
echo "<td>".$value['USU_TELEFONO']."</td>";
echo "<td><a href='?controlador=usuario&accion=frmEditar&id=".$value['USU_ID']."'>Editar</a></td>";
echo"</td>";
echo"</td>";
echo "<td><a href='?controlador=usuario&accion=eliminar&id=".$value['USU_ID']."'>Eliminar</a></td>";
echo"</td>";

echo "<tr>";
}

echo "</table>";
?>
</div>  <!--columna-->
</div>  <!--fila   -->