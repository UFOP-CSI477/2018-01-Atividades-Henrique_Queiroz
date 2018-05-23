<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faça Login ou cadastre-se</title>
	<link rel="stylesheet" href="../mvc/css/bootstrap.css">


	<script language="Javascript">

	function validaSenha(field){
		if( field.value.length==0){
			document.getElementById("msgsenha").innerHTML="<font color='red'>Senha não pode ser vazia! </font>";
			alert("Senha não pode ser vazia!");
		}else{
			document.getElementById("msgsenha").innerHTML="<font color='green'>Senha válida! </font>";
			//chamar a função de inserção

			session_start();
			$_SESSION['email'] = document.getElementById("email");
			$_SESSION['senha'] = field;


			//direcionar pra pagina do router op 6
			
		}
	}
function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemail").innerHTML="<font color='green'>E-mail válido </font>";
//alert("E-mail valido");
	//document.getElementById("btnEntrar").disabled="false";
}
else{
	document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
	alert("E-mail invalido");
	//document.getElementById("btnEntrar").disabled="true";

}
}
</script>


</head>
<body style="background-color: #CEF6F5">
	<center>

		<h1 class="jumbotron">Seja bem vindo ao nosso site! </h1>
		<h2>Entre com seu email e senha ou crie agora mesmo sua conta!</h2>
		<br>
		<br>

		<form name="dadosCliente" method="post" action="router.php?op=6">
			
			<div class="form-group" id="grupoLogin">
				<label>Insira seu e-mail:</label>
				<input type="text" name="email" onblur="validacaoEmail(dadosCliente.email)" id="txtEmail" class="form-group">
				<div id="msgemail"></div>
				<br>
				<label>Insira sua senha:</label>
				<input type="password" name="senha" required>
				<br>
				<div id="msgsenha"></div>
				<br>	
				<br>
				<button type="submit" class="btn btn-primary" name="entrar" id="btnEntrar">Acesssar</button>
				<br>
				<br>
				<a href="./view/cadastroCliente.php">Ainda não possui cadastro? Crie sua conta clicando aqui!</a>

			</div>

		</form>

	</center>




</body>
</html>