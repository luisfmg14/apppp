$(function() {

$("#frmValidar").submit(function(){
	var url   =$("#frmValidar").attr('action'); //captura la url del action
	var datos =$("#frmValidar").serialize(); //captura los datos del formulario
$.post(url, datos, function(e){
	if (e.success ==1) {
		window.location.href = "http://localhost/APP";	
	}else{
		Swal.fire(
			'Verifique usuario y contraseña'
			);
	}
},'json');
	return false;

	});

});