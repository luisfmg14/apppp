<fieldset>
	<legend>Editar usuario</legend>
<form action="?controlador=usuario&accion=edtUsuario"  method="post">
	nombre <input type="tex" name="nombre" 
	value="<?php echo $datos['USU_NOMBRE'];?>" required><br/>
	
	correo <input type="email" name="correo" 
	value="<?php echo $datos['USU_CORREO'];?>" required><br/>
	
	telefono <input type="number" name="telefono" 
	value="<?php echo $datos['USU_TELEFONO'];?>" required><br/>

<input type="hidden" name="id" value="<?php echo $datos['USU_ID'];?>">

<input type="submit" name="aceptar" value="guardar">
  </form>
</fieldset>