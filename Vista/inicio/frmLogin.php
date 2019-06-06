<div class="row">
	<div class="col-md-12">
		<form action="?controlador=usuario&accion=validar&op=1"  method="post" autocomplete="off" id="frmValidar">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="usuario">Usuario</label>
							<input type="tex" name="usuario" id="usuario" required class="form-control">
						</div>
					</div>

	<div class="col-md-6">
		<div class="form-group">
		<label for="password">Password</label> 
		<input type="password" name="password" id="password" required class="form-control">
	</div>
  </div>
</div>
	<input type="submit" id="aceptar" name="aceptar" value="Guardar" class="btn btn-primary">
  <br /><br />
  </form>
<div id="mensaje"></div>
</div>
</div>
<!-- ?controlador=usuario&accion=validar -->