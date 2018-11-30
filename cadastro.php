<html  = lang"pt-br">

<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Sistema de Cadastro</title>

</head>

<body>
	<script src="web.js"></script>

&nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <img src="cadastro.png">
	<form name="signup" method="post" action="cadastrando.php" >

	<label class="hora">Nome: </label><input type="text" name= "nome" size="25"/> <br /><br />
	<label class="hora">Sobrenome: </label><input type="text" name="sobrenome"size="25" /> <br /><br />
	<label class="hora">País:</label><input type="text" name="pais" size="25"/> <br /><br />
	<label class="hora">Estado:</label><input type="text" name="estado"size="25"/> <br /><br />
	<label class="hora">Cidade:</label><input type="text" name="cidade"size="25"/> <br /><br />
	<label class="hora">E-mail:</label><input type="text" name="email"size="25"/> <br /><br />
	<label class="hora">Senha:</label><input type="password" name="senha"size="25"/> <br /><br />


                  <!-- JAVASCRIPT -->
	<p>Click no botão abaixo para finalizar ou desfazer o seu cadastro</p>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button onclick="myFunction()">Cadastrar</button> &nbsp;<button type="reset">Cancelar Cadastro</button>

<p id="Cadastrar"></p>

<script>
function myFunction() {
    var txt;
    var r = confirm("AVISO: Suas informações estão sendo armazenadas em nosso banco.");
    document.getElementById("Cadastrar").innerHTML = txt;
}

</script>
<!-- <input type="submit" value="Cadastrar"> -->

</form>
</body>
</html>
