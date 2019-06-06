<div class="row">
	<div class="col-md-12">

<form action="?controlador=producto&accion=regProducto"  method="post">
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="tex" name="nombre" id="nombre" required class="form-control">
	</div>
</div>

	<div class="col-md-6">
		<div class="form-group">
		<label for="correo">Precio</label>
			<input type="number" name="precio" id="precio" required class="form-control">
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
		<label for="correo">Descripcion</label>
			<input type="tex" name="descripcion" id="descripcion" required class="form-control">
		</div>
	</div>

    <div class="col-md-6">
		<div class="form-group">
		<label for="correo">foto</label>
			<input type="file" name="foto" id="foto" required>
		</div>
	</div>
</div>

<input type="submit" name="aceptar" value="Guardar" class="btn btn-primary">
  </form>
</fieldset>