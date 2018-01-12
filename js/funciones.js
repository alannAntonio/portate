var precio = 9890;
var emailState = false;
var passState = false;
var passLibre = false;
var accesoAutorizado = false;
var recuperacion = false;
$("#password").val("");
$("#email").val("");
$("#login-password").val("");
$("#login-email").val("");

$(function(){
	$("#acceso").click(function(){
		$(location).attr('href', 'login');
	});
	$("#cerrar").click(function(){
		$(location).attr('href', 'cerrar-sesion.php');
	});
	$(".primera").click(function(){
			$(".premio").fadeIn(500);
			$(".mira").fadeOut(0);
			$(".precio").fadeOut(0);
			$('html, body').animate({
	          scrollTop: $(".menu").offset().top
	        }, 1000);
	        $('.primera').addClass("selected");
	        $('.segunda').removeClass("selected");	
	        $('.tercera').removeClass("selected");
	});
	$(".menu").children(".option:eq(1)").click(function(){
			$(".premio").fadeOut(0);
			$(".mira").fadeIn(500);
			$(".precio").fadeOut(0);
			$('html, body').animate({
	          scrollTop: $(".menu").offset().top
	        }, 1000);	
	        $('.primera').removeClass("selected");
	        $('.segunda').addClass("selected");	
	        $('.tercera').removeClass("selected");
	});
	$(".menu").children(".option:eq(2)").click(function(){
			$(".premio").fadeOut(0);
			$(".mira").fadeOut(0);
			$(".precio").fadeIn(500);
			$('html, body').animate({
	          scrollTop: $(".menu").offset().top
	        }, 1000);	
	        $('.primera').removeClass("selected");
	        $('.segunda').removeClass("selected");	
	        $('.tercera').addClass("selected");
	});
	$(".comenzar2").click(function(){
		$(location).attr('href', 'signup');
	});		
	$(".cantidad-meses").val("1");
	mostrarTotal();
	$(".cantidad-meses").change(function (){
	 this.value = (this.value + '').replace(/[^1-6]/g, ''
	);
	if(this.value > 6 ){
	 	$(".cantidad-meses").val("6");
	}
	mostrarTotal();mostrarTotal();
	});
	$(".cantidad-meses").focusout(function(){
		if(this.value == ""){
			this.value = "1";
		}
		mostrarTotal();
	});

	$(".premium").addClass("painted");
	$(".basico").removeClass("painted");
	$(".estandar").removeClass("painted");
	$(".box-premium").animate({
		opacity: "1"
	},0);
									
	$('.primer-paso').fadeIn(200);
	$('.btn-primer-paso').click(function(){
		$('.pasos').fadeOut(0);
		$('.segundo-paso').fadeIn(200);
	});
	$('.comprar-ocultar').click(function(){
		$('.pasos').fadeOut(0);
		$('.tercer-paso').fadeIn(200);
	});
	$('.btn-tercer-paso').click(function(){
		$('.pasos').fadeOut(0);
		$('.cuarto-paso').fadeIn(200);
	});
	$('#email').keyup(function(){				
		verificarEmail(this);				
	});
	$('#login-email').keyup(function(){				
		verificarEmail(this);				
	});
	$('#login-email').focusout(function(){				
		verificarEmail(this);				
	});
	$('#email').focusout(function(){
		verificarEmail(this);				
	});
	$('#password').keyup(function(){
		verificarPassword(this);				
	});
	$('#password').focusout(function(){
		verificarPassword(this);				
	});
	$('#login-password').keyup(function(){
		verificarPassword(this);				
	});
	$('#login-password').focusout(function(){
		verificarPassword(this);				
	});
	$('.box-basico').click(function(){
		boxPaint(this);
		$(".basico").addClass("painted");
		$(".estandar").removeClass("painted");
		$(".premium").removeClass("painted");
		precio = 6890;	
		mostrarTotal();	
	});
	$('.box-estandar').click(function(){
		boxPaint(this);
		$(".estandar").addClass("painted");
		$(".basico").removeClass("painted");
		$(".premium").removeClass("painted");
		precio = 7990;
		mostrarTotal();				
	});
	$('.box-premium').click(function(){
		boxPaint(this);
		$(".premium").addClass("painted");
		$(".basico").removeClass("painted");
		$(".estandar").removeClass("painted");
		precio = 9890;	
		mostrarTotal();	
	});
	$(".btn-validar-registro").click(function(){
		e = $("#email");
		p = $("#password");
		validarRegistro(e,p);
	});
	$(".iniciar-sesion-login").click(function(){
		e = $("#login-email");
		p = $("#login-password");
		verificarExistencia(e,p);
	});
	$(".ya-registrado").click(function(){
		yaRegistrado();
	});
	$(".btn-quinto-paso").click(function(){
		$('.pasos').fadeOut(0);
		$(".sexto-paso").fadeIn(500);
		mostrarBtnWebpay();
	});
	$("#cambiar").click(function(){
		$('.pasos').fadeOut(0);
		$('.segundo-paso').fadeIn(200);
		$(".comprar-ocultar").fadeOut(0);
		$(".interrupcion").show(0);
	});
	$(".interrupcion").click(function(){				
		mostrandoPlan();
	});
	$(".enviar-un-email").click(function(){
		verificarRecuperacion();				
	});
	$("#cambiar-label").click(function(){
		$(this).fadeOut(0);
		$(".tr-old-pass").fadeOut(0);
		$(".tr-nuevo-pass").fadeIn(200);
	});
	$(".btn-cancelar-pass").click(function(){
		$(".tr-nuevo-pass").fadeOut(0);
		$("#cambiar-label").fadeIn(200);
		$(".tr-old-pass").fadeIn(200);
		$(".nuevo-pass").val("");
	});
	$(".cerrar-cpanel").click(function(){
		$(location).attr('href', 'cerrar-sesion');
	});
	$(".adquirir").click(function(){
		$(location).attr('href', 'signup');		
	});
	$(".btn-cambiar-pass").click(function(){
		var nuevoPass = $(".nuevo-pass").val();
		if(nuevoPass == ""){
			$(".alert-nuevo-pass").html("Introduce una contraseña");
		}else{
			if(nuevoPass.length < 4){
				$(".alert-nuevo-pass").html("Debe tener entre 4 y 50 caracteres");
			}else{
				$(".alert-nuevo-pass").html("");
				$.post("cambiar_pass.php", {nuevoPass:nuevoPass}, function(respuesta){
					if(respuesta == "true"){
						$(".tr-nuevo-pass").fadeOut(0);
						$("#cambiar-label").fadeIn(200);
						$(".tr-old-pass").fadeIn(200);
						$(".pass-changed").html("¡Password modificado!");
					}else{
						$(".pass-changed").html("¡Error! - No se ha podido moodificar el password.");
					}
					$(".pass-changed").fadeIn(0);
					$(".pass-changed").delay(3000).fadeOut(1000);
					$(".nuevo-pass").val("");
				});

			}
		}
	})
	$(".btn-contacto").click(function(){
		nombreInput = $(".nombre-contacto").val();
		mensajeInput = $(".mensaje-contacto").val();
		if($(".nombre-contacto").val() == ""){
			nombreContacto = false;
			$(".error-nombre-contacto").html("Ingresa un nombre");
		}else{
			$(".error-nombre-contacto").html("");
			nombreContacto = true;
		}

		correo = $('.email-contacto');
		correoInput = $('.email-contacto').val();
		verificarEmail(correo);

		if($(".mensaje-contacto").val() == ""){
			mensajeContacto = false;
			$(".error-mensaje-contacto").html("Ingresa un mensaje");
		}else{
			$(".error-mensaje-contacto").html("");
			mensajeContacto = true;
		}

		if(nombreContacto == true && emailState == true && mensajeContacto == true){
			$(".nombre-contacto").val("");
			$(".email-contacto").val("");
			$(".mensaje-contacto").val("");
			$.post("enviar-mensaje.php", {nombreInput:nombreInput,correoInput:correoInput,mensajeInput:mensajeInput}, function(respuesta){
				$(".contacto-result-contain").html(respuesta);
				$(".contacto-result").fadeIn(100);
				$(".contacto-result").delay(4000).fadeOut(800);
			});
		}
	});
});

function boxPaint(t){
	$(".title-box").animate({
		opacity: "0.6"
	},0);
	$(t).animate({
		opacity: "1"
	},0);
}

function verificarPassword(p){
	var pass = $(p).val();
	if(pass == ""){
		$("#password-alert").html("La contraseña es obligatoria");
		$(p).addClass("error");
		$(p).removeClass("correct");
	}else if(pass.length < 4 && pass !=""){
		$("#password-alert").html("La contraseña debe tener entre 4 y 50 caracteres.");
		$(p).addClass("error");
		$(p).removeClass("correct");	
		passState = false;
	}else{
		$("#password-alert").html("");
		$(p).removeClass("error");
		$(p).addClass("correct");
		passState = true;
	}
}		

function verificarEmail(e){
	email = $(e).val();		
	if(email == ""){
		$("#email-alert").html("El email es obligatorio");
		$(e).addClass("error");
	    $(e).removeClass("correct");
	    emailState = false;
	    $(".error-email-contacto").html("Ingresa un correo válido");
	}else{
		var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
	    if (caract.test(email) == false){
	        $(e).addClass("error");
	        $(e).removeClass("correct");
	        $("#email-alert").html("Debes ingresar un email válido");
	        $(".error-email-contacto").html("Ingresa un correo válido");
	        emailState = false;
	    }else{
	    	$("#email-alert").html("");
	    	$(e).removeClass("error");
	    	$(e).addClass("correct");
	    	$(".error-email-contacto").html("");
	    	emailState = true;			    				    
	    }
	}		    
}

function mostrarTotal(){			
	var meses = $(".cantidad-meses").val();			
	$(".total").html("<h3>Total $" + precio * meses + "</h3>");
}

function mostrandoPlan(){
	e = $("#email");
	p = $("#password")
	eVal = $(e).val();
	pVal = $(p).val();
	var mostrarPlan;
	verificarPassword($(p));
	verificarEmail($(e));
	if(passState == true && emailState == true && passLibre == true){					
		$(".pasos").fadeOut(0);
		$(".quinto-paso").fadeIn(200);
		switch(precio){
			case 9890:
				mostrarPlan = "Streaming ilimitado en HD y Ultra HD por $9.890 al mes, renovable en cualquier momento.";
				break;
			case 7990:
				mostrarPlan = "Streaming ilimitado en HD por $7.990 al mes, renovable en cualquier momento.";
				break;
			case 6890:
				mostrarPlan = "Streaming ilimitado en SD por $6.890 al mes, renovable en cualquier momento.";
				break;
		}
		$("#iniciar-sesion").html('<a href="cerrar-sesion.php">Cerrar sesión</a>');
		$("#mostrar-plan").html(mostrarPlan);
		$.post("insertar_cliente.php", {email:eVal, password:pVal}, function(){
		});				
	}
}
function yaRegistrado(){
		$(".pasos").fadeOut(0);
		$(".quinto-paso").fadeIn(200);
		switch(precio){
			case 9890:
				mostrarPlan = "Streaming ilimitado en HD y Ultra HD por $9.890 al mes, renovable en cualquier momento.";
				break;
			case 7990:
				mostrarPlan = "Streaming ilimitado en HD por $7.990 al mes, renovable en cualquier momento.";
				break;
			case 6890:
				mostrarPlan = "Streaming ilimitado en SD por $6.890 al mes, renovable en cualquier momento.";
				break;
		}
		$("#mostrar-plan").html(mostrarPlan);
}

function accediendoPanel(){
	e = $("#login-email");
	p = $("#login-password");
	eVal = $(e).val();
	pVal = $(p).val();
	verificarPassword($(p));
	verificarEmail($(e));
	if(passState == true && emailState == true && accesoAutorizado == true){					
		$(location).attr('href', 'cpanel');		
	}
}

function validarRegistro(e,p) {
	eVal = $(e).val();			
   	$.post("login_email.php", {email:eVal}, function(mensaje){
		if(mensaje == "true"){	    			
			passLibre = false;
			$(".alerta").fadeIn(100);
		}else{
			$(".alerta").fadeOut(0);
			passLibre = true;
			mostrandoPlan();          
		}	            
    });
};

function verificarExistencia(e,p) {
	eVal = $(e).val();
	pVal = $(p).val();
   	$.post("rescatar_email.php", {email:eVal, password:pVal}, function(mensaje){
		if(mensaje == "false"){	    			
			accesoAutorizado = false;
			$(".no-existe-cuenta").html('No podemos encontrar una cuenta con esta dirección de email. Inténtalo de nuevo o <a href="index.html">crea una cuenta nueva.</a>');
			$(".no-existe-cuenta").fadeIn(100);
		}else if(mensaje == "soloEmail"){
			$(".no-existe-cuenta").html('Contraseña incorrecta. Inténtalo de nuevo o <a href="LoginHelp">restablece la contraseña.</a>');
			$(".no-existe-cuenta").fadeIn(200);
			accesoAutorizado = false;	    			         
		}else{
			$(".no-existe-cuenta").html('');
			$(".no-existe-cuenta").fadeOut(0);
			accesoAutorizado = true;
			accediendoPanel(); 
		}	            
    });
};

function verificarRecuperacion(){
	eVal = $("#login-email").val();
   	$.post("recuperacion.php", {email:eVal}, function(mensaje){
		if(mensaje == "false"){	    			
			recuperacion = false;
			$(".no-existe-cuenta2").fadeIn(200)					
		}else{
			$(".no-existe-cuenta2").html('');
			$(".no-existe-cuenta").fadeOut(0);
			recuperacion = true;
			$(".login-container").html('<h1>Email enviado</h1><label>Te enviamos un email con instrucciones para restablecer la contraseña a <strong>'+eVal+'</strong>. Si no lo ves en tu bandeja de entrada, revisa la carpeta de correo no deseado.<br>Si ya no tienes acceso a esta cuenta de email, contáctanos .</label>');
		}	            
    });
};
//https://portate.cl/pago-finalizado
function mostrarBtnWebpay(){
	cantidadMeses = parseInt($(".cantidad-meses").val());
	var precioFinal = precio * cantidadMeses;
	switch(precioFinal){
		case 9890:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="ab0ced744b702bbcf73a72946dc6db66"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 19780:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="7f5f7ef51027c50a75770361bca98a22"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 29670:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="9395d7be59173d120f98c04815ff8fa0"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 39560:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="194d8be4d25f1d292567c25199f7be13"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 49450:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="fd55f2b9058c9923692ef05b03d54ceb"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 59340:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="3b034143570c648819b26f50a5439399"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 7990:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="c309db656d7900003db96c30e71cf5da"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 15980:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="48b2bfabbe164d72daa3ad07bd3f1b10"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 23970:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="fce4b30c6afc064bfd5b3b8ebc1c5f33"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 31960:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="8fb96a836baf3136e06305a3348b1162"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 39950:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="f1c8396fb9da1d57e23b9694cedf7027"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 47940:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="1d2f115be89272d3da76326b9f9d20b9"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 6890:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="7824d709d93bdfe64f0dd22853d08cd8"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 13780:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="f607f23d264698fde3ec989ac4c3e118"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 20670:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="258d9abd25fb35623b91f6b598dd41fa"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 27560:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="9c797a5533a9874d8f65784ab33ca649"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 34450:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="d15de9ce5f4aefe65cdbb5e21d5d537e"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
		case 41340:
			btnPagoWebpay = '<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService"><input type="hidden" name="buttonId" value="2b7a67d20409a532b8ceb578f7889677"/><input type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/></form>';
			break;
	}
	$(".btn-pago-webpay").html(btnPagoWebpay);
}

