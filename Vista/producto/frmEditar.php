<div class="row">
	<div class="col-md-12">

<form action="?controlador=producto&accion=edtProducto"  method="post">
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
		<label for="nombre">nombre</label>
			<input type="tex" name="nombre" id="nombre" value="<?php echo $datos['pro_nombre'];?>" required>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
		<label for="nombre">precio</label>
			<input type="number" name="precio" id="precio" value="<?php echo $datos['pro_precio'];?>" required>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
		<label for="nombre">descripcion</label>
			<input type="tex" name="descripcion" id="descripcion" value="<?php echo $datos['pro_descripcion'];?>" required>
		</div>
	</div>


<input type="hidden" name="id" value="<?php echo $datos['pro_id'];?>">

</div>

<input type="submit" name="aceptar" value="guardar">
  </form>
</fieldset>
