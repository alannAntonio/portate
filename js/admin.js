$(function(){
	var usuario;
	var usuarioObj;
	var esCuenta = false;
	var esMeses = false;
	var esCorreo = false;
	var esClaveNetflix = false;

	$(".btn-activar").click(function(){
		$(".desactivar-container").fadeOut(0);
		$(".activar-container").fadeIn(100);
		$(".btn-desactivar").css({borderRadius:'0 0 0 20px'});
		$(".labels-container").css({backgroundColor: '#115F61'});
		$(".detalle-activar").fadeOut(0);
		$(".table-activar-container").fadeIn(100);
	});
	$(".btn-desactivar").click(function(){
		$(".activar-container").fadeOut(0);
		$(".desactivar-container").fadeIn(100);
		$(".btn-activar").css({borderRadius:'0 0 20px 0'});
		$(".labels-container").css({backgroundColor: '#C64B3F'});
		$(".detalle-desactivar").fadeOut(0);
		$(".table-desactivar-container").fadeIn(100);
	});
	$(".btn-registro-activar").click(function(){
		$(".detalle-activar").fadeOut(0);
		$(".table-activar-container").fadeIn(100);
	});
	$(".btn-detalle-activar").click(function(){
		$(".table-activar-container").fadeOut(0);
		$(".detalle-activar").fadeIn(100);		
	});
	$(".btn-registro-desactivar").click(function(){
		$(".detalle-desactivar").fadeOut(0);
		$(".table-desactivar-container").fadeIn(100);
	});
	$(".btn-detalle-desactivar").click(function(){
		$(".table-desactivar-container").fadeOut(0);
		$(".detalle-desactivar").fadeIn(100);		
	});
	$(".btn-buscar-action").click(function(){
		buscarActivar();
	});
	// $(".buscar-activar-input").keyup(function(){
	// 	buscarActivar();
	// });
})

function mostrarUsuarioActivar(tr){
	usuario = $(tr).children("td:eq(0)").html();
	usuarioObj = $(tr);
	$.post("rescatar-detalle-activar.php", {usuario:usuario}, function(detalle){
		$(".table-activar-container").fadeOut(0);
		$(".detalle-activar").fadeIn(100);
		$(".detalle-activar-contain").html(detalle);	
	});
}
function acuseRecibo(){
	$.post("activar-cuenta.php", {usuarioPendiente: usuario}, function(alerta){
		$(".alerta-activar-contain").html(alerta);
		$(".alerta-activar").show(0);
		$(".alerta-activar").delay(4000).fadeOut(800);
		mostrarUsuarioActivar(usuarioObj);
		$.post("rescatar-tabla-activar.php", {usuario:usuario}, function(tabla){
			$(".tabla-body").html(tabla);
		});
	});
}
function buscarActivar(){
	textoBuscar = $(".buscar-activar-input").val();
	$.post("rescatar-tabla-activar.php", {texto:textoBuscar}, function(tabla){
		$(".tabla-body").html(tabla);
	});
}
function activarCuenta(){
	cuenta = $(".cuenta-select").val();
	meses = $(".meses").val();
	correo = $(".correo-activar").val();
	claveNetflix = $(".clave-netflix").val();
	verificarCuentaActivar();
	verificarMesesActivar($(".meses"));
	verificarCorreoActivar();
	verificarClaveActivar();
	if(esCuenta == true && esMeses == true && esCorreo == true && esClaveNetflix == true){
		$.post("activar-cuenta.php",{cuenta:cuenta, meses:meses, correo:correo, claveNetflix:claveNetflix, usuario:usuario}, function(mensaje){
			$(".action-activar-cuenta").fadeOut(0);
			$(".alerta-activar-contain").html(mensaje);
			$(".alerta-activar").show(0);
			$(".alerta-activar").delay(4000).fadeOut(800);
			$("#estado-pendiente").html("Activa");
			$.post("rescatar-tabla-activar.php", {usuario:usuario}, function(tabla){
				$(".tabla-body-activar").html(tabla);
			});
			$.post("rescatar-tabla-desactivar.php", {usuario:usuario}, function(tabla){
			$(".tabla-body-desactivar").html(tabla);
		});
		});
	}

}
function verificarCuentaActivar(){
	if($(".cuenta-select").val()==""){
		$(".cuenta-select").addClass("error-activar");
		$(".alert-cuenta-activar").html("Debes seleccionar una cuenta");
		esCuenta = false;
	}else{
		$(".cuenta-select").removeClass("error-activar");
		$(".alert-cuenta-activar").html("");
		esCuenta = true;
	}	
}
function verificarMesesActivar(e){
	e.value = (e.value + '').replace(/[^1-9]/g, '');
	if($(".meses").val()==""){
		$(".meses").addClass("error-activar");
		$(".alert-meses-activar").html("Debes ingresar cantidad de meses");
		esMeses = false;
	}else{
		if($(".meses").val()>6){
			$(".meses").val("6");
		}
		$(".meses").removeClass("error-activar");
		$(".alert-meses-activar").html("");
		esMeses = true;
	}	
}
function verificarCorreoActivar(){
	if($(".correo-activar").val()==""){
		$(".correo-activar").addClass("error-activar");
		$(".alert-email-activar").html("Debes ingresar el correo");
		esCorreo = false;
	}else{
		var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    	if (caract.test($(".correo-activar").val()) == true){
    		$(".correo-activar").removeClass("error-activar");
			$(".alert-email-activar").html("");
			esCorreo = true;
    	}else{
    		$(".correo-activar").addClass("error-activar");
			$(".alert-email-activar").html("Email inválido");
			esCorreo = false;
    	}
	}	
}
function verificarClaveActivar(){
	if($(".clave-netflix").val()==""){
		$(".clave-netflix").addClass("error-activar");
		$(".alert-clave-activar").html("Debes ingresar la clave");
		esClaveNetflix = false;
	}else{
		if($(".clave-netflix").val().length<4){
			$(".clave-netflix").addClass("error-activar");
			$(".alert-clave-activar").html("La clave debe ser entre 4 y 50 caracteres");
			esClaveNetflix = false;
		}else{
		$(".clave-netflix").removeClass("error-activar");
		$(".alert-clave-activar").html("");
		esClaveNetflix = true;
		}
	}	
}
function mostrarUsuarioDesactivar(tr){
	usuario = $(tr).children("td:eq(0)").html();
	usuarioObj = $(tr);
	$.post("rescatar-detalle-desactivar.php", {usuario:usuario}, function(detalle){
		$(".table-desactivar-container").fadeOut(0);
		$(".detalle-desactivar").fadeIn(100);
		$(".detalle-desactivar-contain").html(detalle);	
	});
}
function desactivarCuenta(){
	$.post("desactivar-cuenta.php",{usuario:usuario}, function(mensaje){
		$(".action-desactivar-cuenta").fadeOut(0);
		$(".alerta-activar-contain").html(mensaje);
		$(".alerta-activar").show(0);
		$(".alerta-activar").delay(3000).fadeOut(800);
		$("#estado-desactivar").html("Inactiva");
		$.post("rescatar-tabla-desactivar.php", {usuario:usuario}, function(tabla){
			$(".tabla-body-desactivar").html(tabla);
		});
		$.post("rescatar-tabla-activar.php", {usuario:usuario}, function(tabla){
			$(".tabla-body-activar").html(tabla);
		});
	});
}
