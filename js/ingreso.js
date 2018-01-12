$(function(){
	$(".entrar").click(function(){
		u = $(".username").val();
		p = $(".password").val();
		$.post("login-administrador.php", {u:u,p:p},function(mensaje){
			if(mensaje == "true"){
				$(".alert").html("");
				$(location).attr('href', 'admin.php');
			}else{
				$(".alert").html("Credenciales inválidas.");
			}
		});
	});
})