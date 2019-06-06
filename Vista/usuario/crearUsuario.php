<div class="row">
	<div class="col-md-12">


<form action="?controlador=usuario&accion=regUsuario"  method="post" autocomplete="off">
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
		<label for="nombre">Nombres</label>
		<input type="tex" name="nombre" id="nombre" required class="form-control">
	
	</div>
</div>

	<div class="col-md-6">
		<div class="form-group">
		<label for="correo">Correo</label> 
		<input type="email" name="correo" id="correo" required class="form-control">
	</div>
</div>

	<div class="col-md-6">
		<div class="form-group">
		<label for="telefono">Telefono</label>
		<input type="number" name="telefono" id="telefono" required class="form-control">
	</div>
 </div>
</div>	
	<input type="submit" name="aceptar" value="Guardar" class="btn btn-primary">
  </form>

</div>
</div>