<?php
session_start();
$usuario = $_SESSION['cpuser'];
global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
$cmdsql="SELECT * FROM usuario WHERE idusuario = '$usuario'";
$execcmd=mysqli_query($link, $cmdsql);
$REG=mysqli_fetch_array($execcmd);
printf("<html>");
printf("<head>");
printf("<title>Configurações do Administrador</title>");
printf("<meta charset='utf-8'>");
echo("<link rel='stylesheet' type='text/css' href='teste.css'>");
echo("<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" 
	integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" 
	crossorigin=\"anonymous\">");
echo("	<style>");
echo("		div.t1 {");
echo("			margin-top: 15%;");
echo("			margin-right: 10%;");
echo("			margin-left: 1px;");
echo("			margin-bottom: 1%;");
echo("			background-color: #ffffff;");
echo("		}");
echo("		p.t1 {");
echo("			font-size: 28px;");
echo("			font-family: 'Georgia';");
echo("			line-height: 2;");
echo("			text-align: left;");
echo("			");
echo("		");
echo("		}");
echo("		span {");
echo("			display: block;");
echo("		}");
echo("		.Retangulo_7 {");
echo("		  background-color: rgb(221, 84, 84);");
echo("		  opacity: 0.749;");
echo("		  position: relative;");
echo("		  left: 15%;");
echo("		  top: 55px;");
echo("		  width: 70%;");
echo("		  height: 45px;");
echo("		  z-index: 85;");
echo("		}");
echo("		.CADASTRO_DE_USUARIO {");
echo("		  font-size: 33.75px;");
echo("		  font-family: 'Georgia';");
echo("		  color: rgb(51, 42, 41);");
echo("		  line-height: 0.867;");
echo("		  text-align: center;");
echo("		  position: relative;");
echo("		  left: 15%;");
echo("		  top: 10px;");
echo("		  width: 70%;");
echo("		  height: 32px;");
echo("		}");


echo("	div.t3 {");
echo("		  font-size: 20px;");
echo("		  font-family: 'Constantia';");
echo("		  color: rgb(17, 17, 17);");
echo("		  line-height: 1.733;");
echo("		  text-align: left;");
echo("		}");
echo("		p.t3{");
echo("		  position: absolute;");
echo("		  top: 280px;");
echo("		}");
echo("		p.t4{");
echo("		  position: absolute;");
echo("		  top: 310px;");
echo("		}");

echo("	div.t4 {");
echo("		  font-size: 20px;");
echo("		  font-family: 'Constantia';");
echo("		  color: rgb(17, 17, 17);");
echo("		  line-height: 1.733;");
echo("		  text-align: left;");
echo("		}");
echo("		p.t5{");
echo("		  position: absolute;");
echo("		  top: 380px;");
echo("		}");
echo("		p.t6{");
echo("		  position: absolute;");
echo("		  top: 400px;");

echo("		}");
echo(".Retangulo_2 {");
echo("		  border-width: 1px;");
echo("		  border-color: rgb(242, 137, 138);");
echo("		  border-style: solid;");
echo("		  opacity: 0.722;");
echo("		  position: relative;");
echo("			left: 332px;");
echo("			top: 10px;");
echo("			width: 429px;");
echo("			height: 25px;>");
echo("		}");

echo("		.Retangulo_1 {");
echo("		  border-width: 1px;");
echo("		  border-color: rgb(242, 137, 138);");
echo("		  border-style: solid;");
echo("		  opacity: 0.722;");
echo("		  position: relative;");
echo("			left: 332px;");
echo("			top: 20px;");
echo("			width: 429px;");
echo("			height: 25px;>");
echo("		}");

echo("		.fas.fa-search{");
echo("			position: relative;");
echo("			left: 225px;");
echo("			top: 2px;");
echo("			width: 10px;");
echo("			height: 25px;");
echo("		}");

echo("		.fas.fa-cheese{");
echo("			position: relative;");
echo("			left: 225px;");
echo("			top: 2px;");
echo("			width: 10px;");
echo("			height: 25px;");
echo("		}");

echo("		.fas.fa-id-card{");
echo("			position: relative;");
echo("			left: 300px;");
echo("			top: -43px;");
echo("			width: 48px;");
echo("			height: 25px;");
echo("		}");

echo("		p.k1{");
echo("			  font-size: 31.677px;");
echo("			  font-family: \"Sylfaen\";");
echo("			  color: rgb(43, 17, 17);");
echo("			  line-height: 0.923;");
echo("			  text-align: center;");
echo("			  -moz-transform: matrix( 1.0859375,0,0,2.13088735143116,0,0);");
echo("			  -webkit-transform: matrix( 1.0859375,0,0,2.13088735143116,0,0);");
echo("			  -ms-transform: matrix( 1.0859375,0,0,2.13088735143116,0,0);");
echo("			  position: absolute;");
echo("			  left: 50px;");
echo("			  top: 10px;");
echo("		}");

echo("		p.k2{");
echo("			font-size: 14px;");
echo("			font-family: \"Georgia\";");
echo("			line-height: 0.7;");
echo("			text-align: left;");
echo("			position: relative;");
echo("			left: 1015px;");
echo("			top: -67px;");
echo("			width: 90.02px;");
echo("			height: 10;");
echo("			font-weight: bold;");
echo("		}");

echo("		.Forma_4 {");
echo("		  border-width: 1px;");
echo("		  border-color: rgb(208, 207, 207);");
echo("		  border-style: solid;");
echo("		  position: relative;");
echo("		  left: 30px;");
echo("		  top: 5px;");
echo("		  width: 1200.02px;");
echo("		  height: 1;");
echo("		}");

echo("		div.k3 {");
echo("		  font-size: 20px;");
echo("		  font-family: \"Constantia\";");
echo("		  color: rgb(17, 17, 17);");
echo("		  line-height: 1.733;");
echo("		  text-align: left;");
echo("		}");

echo("		p.k3{");
echo("		  position: absolute;");
echo("		  top: 100px;");
echo("		}");

echo("		div.t2 {");
echo("		  font-size: 20px;");
echo("		  font-family: \"Constantia\";");
echo("		  color: rgb(17, 17, 17);");
echo("		  line-height: 1.733;");
echo("		  text-align: left;");
echo("		}");

echo("		p.t2{");
echo("			font-size: 14px;");
echo("			font-family: \"Georgia\";");
echo("			line-height: 2;");
echo("			text-align: left;");
echo("			position: absolute;");
echo("			left: 360px;");
echo("			top: 280px;");
echo("			width: 300.02px;");
echo("			height: 10;");
echo("			font-weight: bold;");
echo("		}");

echo("		p.t3{");
echo("			font-size: 14px;");
echo("			font-family: \"Georgia\";");
echo("			line-height: 2;");
echo("			text-align: left;");
echo("			position: absolute;");
echo("			left: 620px;");
echo("			top: 280px;");
echo("			width: 250.02px;");
echo("			height: 10;");
echo("			font-weight: bold;");
echo("		}");

echo("		p.t4{");
echo("			font-size: 14px;");
echo("			font-family: \"Georgia\";");
echo("			line-height: 2;");
echo("			text-align: left;");
echo("			position: absolute;");
echo("			left: 360px;");
echo("			top: 310px;");
echo("			width: 550.02px;");
echo("			height: 10;");
echo("			font-weight: bold;");
echo("		}");
echo("p.nome{");
	echo("	font-size: 28px;");
	echo("		font-family: \"Georgia\";");
	echo("		line-height: 1.2;");
	echo("		text-align: left;");
	echo("		position: absolute;");
	echo("		left: 600px;");
	echo("		top: 260px;");
	echo("		width: 350px;");
	echo("		height: 10;");
	echo("		font-weight: bold;");
	echo("	}");
	echo("	.Retangulo_11 {");
		echo("		border-width: 8px;");
		echo("		border-color: rgb(51, 42, 41);");
		echo("		border-style: solid;");
		echo("		position: absolute;");
		echo("		left: 350px;");
		echo("		top: 290px;");
		echo("		width: 200px;");
		echo("		height: 200px;");
		echo("		z-index: 1;");
		echo("	  }");

echo("			</style>");
echo("</head>");


printf("<body>");
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

echo("	<div class=\"Retangulo_7\"><div class=\"CADASTRO_DE_USUARIO\">ADMINISTRADOR</div></div>");

echo("	<div class=\"row\">");
echo("	  <div class=\"column side\"></div>");

echo("<div class='column middle'>");
printf("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class=\"t2\">");
printf("<p class=\"nome\">NOME:$REG[txnome]<br>NOME USER:$REG[txuser]</p>");
printf("<form action='./AdminAlterar.php' method='POST'>");
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
printf("<form action='./IngredienteCadastro.html' method='POST'>");
printf("<button type='submit' class='button red'>Cadastrar Ingrediente</button>");
printf("</form>");

printf("<form action='./IngredienteAlterar.php' method='POST'>");
printf("<button type='submit' class='button red'>Alterar Ingrediente</button>");
printf("</form>");
printf("<form action='./IngredienteExcluir.php' method='POST'>");
printf("<button type='submit' class='button red'>Excluir Ingrediente</button>");
printf("</form>");
printf("<form action='./CategoriaCadastro.php' method='POST'>");
printf("<button type='submit' class='button red'>Cadastrar Categoria</button>");
printf("</form>");
printf("<form action='./CategoriaAlterar.php' method='POST'>");
printf("<button type='submit' class='button red'>Alterar Categoria</button>");
printf("</form>");
printf("<form action='./CategoriaExcluir.php' method='POST'>");
printf("<button type='submit' class='button red'>Excluir Categoria</button>");
printf("</form>");
printf("<form action='./PaginaDenuncias.php' method='POST'>");
printf("<button type='submit' class='button red'>Ver Denúncias</button>");
printf("</form>");
printf("<form action='./PaginaInicial.php' method='POST'>");
printf("<input type='hidden' name='usuariocp' value='$usuario'>");

printf("<p class='a3'><button type='submit' class='button gray'>Voltar</button></p></div>");

printf("<div class=\"Retangulo_11\"><img src='./imagem/$REG[Foto]' style='width:185px;height:185px;'></div>");
printf("</form>");
printf("</body>");
printf("</html>");
?>