<html>
<head>
	<title>PERFIL</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="teste.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
	integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
	crossorigin="anonymous">
	<style>
		div.t1 {
			margin-top: 5%;
			margin-right: 10%;
			margin-left: 10%;
			margin-bottom: 1%;
			background-color: #ffffff;
		}
		p.t1 {
			font-size: 14px;
			font-family: "Georgia";
			line-height: 2;
			text-align: left;
		}
		span {
			display: block;
		}
		.Retangulo_7 {
		  background-color: rgb(221, 84, 84);
		  opacity: 0.749;
		  position: relative;
		  left: 15%;
		  top: 55px;
		  width: 70%;
		  height: 45px;
		  z-index: 85;
		}
		.CADASTRO_DE_USUARIO {
		  font-size: 33.75px;
		  font-family: "Georgia";
		  color: rgb(51, 42, 41);
		  line-height: 0.867;
		  text-align: center;
		  position: relative;
		  left: 15%;
		  top: 10px;
		  width: 70%;
		  height: 32px;
		}
		.Retangulo_2 {
		  border-width: 1px;
		  border-color: rgb(242, 137, 138);
		  border-style: solid;
		  opacity: 0.722;
		  position: relative;
			left: 332px;
			top: 10px;
			width: 429px;
			height: 25px;>
		}

		.Retangulo_1 {
		  border-width: 1px;
		  border-color: rgb(242, 137, 138);
		  border-style: solid;
		  opacity: 0.722;
		  position: relative;
			left: 332px;
			top: 20px;
			width: 429px;
			height: 25px;>
		}

		.fas.fa-search{
			position: relative;
			left: 225px;
			top: 2px;
			width: 10px;
			height: 25px;
		}

		.fas.fa-cheese{
			position: relative;
			left: 225px;
			top: 2px;
			width: 10px;
			height: 25px;
		}

		.fas.fa-id-card{
			position: relative;
			left: 300px;
			top: -43px;
			width: 48px;
			height: 25px;
		}

		p.k1{
			  font-size: 31.677px;
			  font-family: "Sylfaen";
			  color: rgb(43, 17, 17);
			  line-height: 0.923;
			  text-align: center;
			  -moz-transform: matrix( 1.0859375,0,0,2.13088735143116,0,0);
			  -webkit-transform: matrix( 1.0859375,0,0,2.13088735143116,0,0);
			  -ms-transform: matrix( 1.0859375,0,0,2.13088735143116,0,0);
			  position: absolute;
			  left: 50px;
			  top: 10px;
		}

		p.k2{
			font-size: 14px;
			font-family: "Georgia";
			line-height: 0.7;
			text-align: left;
			position: relative;
			left: 1015px;
			top: -67px;
			width: 90.02px;
			height: 10;
			font-weight: bold;
		}

		.Forma_4 {
		  border-width: 1px;
		  border-color: rgb(208, 207, 207);
		  border-style: solid;
		  position: relative;
		  left: 30px;
		  top: 5px;
		  width: 1200.02px;
		  height: 1;
		}

		div.k3 {
		  font-size: 20px;
		  font-family: "Constantia";
		  color: rgb(17, 17, 17);
		  line-height: 1.733;
		  text-align: left;
		}

		p.k3{
		  position: absolute;
		  top: 100px;
		}
		
		.Retangulo_11 {
		  border-width: 8px;
		  border-color: rgb(51, 42, 41);
		  border-style: solid;
		  position: absolute;
		  left: 350px;
		  top: 290px;
		  width: 200px;
		  height: 200px;
		  z-index: 1;
		}
		
		div.t2 {
		  font-size: 20px;
		  font-family: "Constantia";
		  color: rgb(17, 17, 17);
		  line-height: 1.733;
		  text-align: left;
		}
		p.t2{
			font-size: 12px;
			font-family: "Georgia";
			line-height: 1.2;
			text-align: left;
			position: absolute;
			left: 540px;
			top: 320;
			width: 250px;
			height: 10;
			font-weight: bold;
		}
		
		p.nome{
		font-size: 28px;
			font-family: "Georgia";
			line-height: 1.2;
			text-align: left;
			position: absolute;
			left: 600px;
			top: 260px;
			width: 350px;
			height: 10;
			font-weight: bold;
		}
		
		p.t3{
		font-size: 10px;
			font-family: "Georgia";
			line-height: 1.2;
			text-align: left;
			position: absolute;
			left: 840px;
			top: 520;
			width: 250px;
			height: 10;
			font-weight: bold;
			}

		p.a3{
		  position: relative;
		  left: 450px;
		}
		

	</style>
</head>


<body>
	<?php
	session_start();
	$usuario = $_SESSION['cpuser'];
	global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
	$cmdsql="SELECT * FROM usuario WHERE idusuario = '$usuario'";
	$execcmd=mysqli_query($link, $cmdsql);
	$REG=mysqli_fetch_array($execcmd);
	echo("<div class=\"header\">");
echo("	<p class=\"k1\">RECEITAS OISHII</p>");

printf("<form action='./Busca.php' method='POST'>");
echo("	<div class=\"Retangulo_2\"><input type='text' name='nomereceita' size='56'>");
echo("	</div>");

echo("	<div class=\"Retangulo_1\"> <input type='text' name='ingredientereceita' size='56'><i class=\"fas fa-cheese\" style='font-size: 38px'></i>	</div> ");
printf("<input type='hidden' name='categoria' value='0'>");
printf("<p class='k3' style='top:15px;left:790px'><input type='submit' class='button red' value='lupa' style='font-size: 12px'></p>");
echo("	<i class=\"fas fa-id-card\" style=\"font-size:64px\"></i>");
echo("	<div class=\"Forma_4\"></div>");
printf("</form>");
if (isset($_SESSION['cpuser']))
{	
	if($_SESSION['tipouser']=="A"){
		printf("<p class=\"k2\"><A HREF=\"PerfilAdm.php\">Perfil</A><p>");
		printf("<p class=\"k2\"><A HREF=\"Deslogar.php\">Deslogar</A><p>");
	}else{
		printf("<p class=\"k2\"><A HREF=\"Perfil.php\">Perfil</A><p>");
		printf("<p class=\"k2\"><A HREF=\"Deslogar.php\">Deslogar</A><p>");
	}
}
else
{
	printf("<p class=\"k2\"><A HREF=\"Login.html\">Entrar</A><p>");
	printf("<p class=\"k2\"><A HREF=\"UsuarioCadastro.php\">Criar Conta</A><p>");
}

echo("	<div class=\"k3\">");
printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='1'>");
printf("<input class='button black' type='submit' value='Prato Principal' style='position: absolute;top:115px;left:50px'>");
printf("</form> ");

printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='2'>");
printf("<input type='submit' class='button black' value='Salada' style='position: absolute;top:115px;left:220px'>");
printf("</form>");

printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='3'>");
printf("<input type='submit' class='button black' value='Massa' style='position: absolute;top:115px;left:390px'>");
printf("</form>");

printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='4'>");
printf("<input type='submit' value='Peixes' class='button black' style='position: absolute;top:115px;left:560px'>");
printf("</form>");

printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='5'>");
printf("<input type='submit' value='Carnes' class='button black' style='position: absolute;top:115px;left:730px'>");
printf("</form>");

printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='6'>");
printf("<input type='submit' value='Doces' class='button black' style='position: absolute;top:115px;left:900px'>");
printf("</form>");

printf("<form action='./Busca.php' method='POST'>");
printf("<input type='hidden' name='categoria' value='7'>");
printf("<input type='submit' value='Bebidas' class='button black' style='position: absolute;top:115px;left:1070px'>");
printf("</form>");
echo("	</div>");
echo("	</div>");
?>
	<div class="Retangulo_7"><div class="CADASTRO_DE_USUARIO">PERFIL</div></div>

	<div class="row">
	  <div class="column side"></div>
		

	<div class="column middle">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="t2">
	
	<?php
	printf("<p class=\"nome\">NOME:$REG[txnome]<br>NOME USER:$REG[txuser]</p>");
	printf("<form action='./UsuarioAlterar.php' method='POST'>");
	printf("<input type='hidden' name='usuariocp' value='$usuario'>");
	printf("<button type='submit' class='button red'>	Alterar Perfil	</button>");
	printf("</form>");
	
	printf("<form action='./Livro.php' method='POST'>");
	printf("<input type='hidden' name='usuariocp' value='$usuario'>");
	printf("<button type='submit' class='button red'>Ver Meus Livros de Receitas</button>");
	printf("</form>");
	printf("<form action='./ReceitaAux.php' method='POST'>");
	printf("<input type='hidden' name='usuariocp' value='$usuario'>");
	printf("<button type='submit' class='button red'>Cadastrar uma Receita</button>");
	printf("</form>");
	printf("<form action='./ReceitaAlterar.php' method='POST'>");
	printf("<input type='hidden' name='usuariocp' value='$usuario'>");
	printf("<button type='submit' class='button red'>Alterar uma Receita</button>");
	printf("</form>");
	printf("<form action='./ReceitaExcluir.php' method='POST'>");
	printf("<input type='hidden' name='usuariocp' value='$usuario'>");
	printf("<button type='submit' class='button red'>Excluir uma Receita</button>");
	printf("</form>");
	printf("<form action='./PaginaInicial.php' method='POST'>");
	printf("<input type='hidden' name='usuariocp' value='$usuario'>");
	
	printf("<p class='a3'><button type='submit' class='button gray'>Voltar</button></p>");
	printf("</form>");
	printf("</div>");
	
	printf("<div class=\"Retangulo_11\"><img src='./imagem/$REG[Foto]' style='width:185px;height:185px;'></div>");
	
	
		
	printf("</div>");

printf("</body>");


printf("</html>");
?>