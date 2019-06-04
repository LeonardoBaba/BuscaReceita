<?php

global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
session_start();
if (isset($_POST['cpreceita']))
{
    $idreceita = $_POST['cpreceita'];
    $_SESSION['idreceita'] = $_POST['cpreceita'];
}
else
{
    $idreceita = $_SESSION['idreceita'];
}
if (isset($_SESSION['cpuser']))
{
    $idusuario = $_SESSION['cpuser'];
}
else
{
    $idusuario = 0;
}
$receita=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM receita WHERE idreceita = $idreceita"));

printf("<html>");
printf("<head>");
printf("<title>Página da Receita</title>");
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
echo("			position: absolute;");
echo("			left: 438px;");
echo("			top: 2px;");
echo("			width: 10px;");
echo("			height: 25px;");
echo("		}");

echo("		.fas.fa-cheese{");
echo("			position: absolute;");
echo("			left: 440px;");
echo("			top: -7px;");
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

echo("		p.k18{");
echo("			  font-size: 30px;");
echo("			  font-family: \"Sylfaen\";");
echo("			  color: rgb(43, 17, 17);");
echo("			  line-height: 0.923;");
echo("			  text-align: center;");
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

echo("div.t2 {");
echo("		  font-size: 20px;");
echo("		  font-family: 'Constantia';");
echo("		  color: rgb(17, 17, 17);");
echo("		  line-height: 1.733;");
echo("		  text-align: left;");
echo("		}");

echo("		p.g1{");
echo("		  position: absolute;");
echo("		  left: 620px;");
echo("		  top: 275px;");
echo("		}");

echo("		p.g2{");
echo("		  position: relative;");
echo("		  font-size: 15px;");
echo("		  font-family: 'Constantia';");
echo("		  left: 5%;");
echo("		}");

echo("		p.g3{");
echo("		  position: relative;");
echo("		  font-size: 15px;");
echo("		  font-family: 'Constantia';");
echo("		  left: 15%;");
echo("		  top: 20px;");
echo("		}");

echo(".R_11 {");
echo("		  border-width: 13.61px;");
echo("		  border-color: rgb(51, 42, 41);");
echo("		  border-style: solid;");
echo("		  position: absolute;");
echo("		  left: 350px;");
echo("		  top: 290px;");
echo("		  width: 250px;");
echo("		  height: 200px;");
echo("		  z-index: 1;");
echo("		}");
echo(".square {");
echo("					height: 172px;");
echo("					width: 220px;");
echo("				}");

echo("input[type=text], select {");
echo("  width: 100%;");
echo("  padding: 12px 20px;");
echo("  margin: 8px 0;");
echo("  display: inline-block;");
echo("  border: 1px solid #ccc;");
echo("  border-radius: 4px;");
echo(" box-sizing: border-box;");
echo("}");

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

#Nome
echo("	<div class=\"Retangulo_7\"><div class=\"CADASTRO_DE_USUARIO\">$receita[txnomereceita]</div></div>");
echo("	<div class=\"row\">");


#Imagem
echo("<div class=\"column side\"><div class='R_11'><img class='square' src='imagem/$receita[tximagem]'></div></div>");

echo("<div class='column middle'>");
echo("<br><br><br><br><br><br><br><br><br><br><br><br><br>");
echo("<div class='t2'>");

#Atributos
if ($idusuario != 0)
{
printf("<form action='./FavoritoIns.php' method='POST'> ");
printf("<input type='hidden' value='$idreceita' name='cpreceita'>");

echo("<button type='submit' style='border: 0; background: transparent'>");
echo("<i class='fas fa-heart' alt='submit' style='position: absolute;top:300px;left:900px;font-size:32px;color:red;'></i>");
echo("</button>");

printf("</form>");
}
echo("<p class=\"g1\">Favoritos: ");
printf("$receita[qtfavoritos]");
echo("</p>");

echo("<p class=\"g1\" style=\"top:295px\">Rendimento: ");
printf("$receita[txrendimento]");
echo("</p>");

echo("<p class=\"g1\" style=\"top:315px\">Tempo: ");
printf("$receita[txtempopreparo]");
echo("</p>");

echo("</div>");

#--------------------------------------------------------------------------------
if ($idusuario != 0)
{
printf("<form action='./DenunciaIns.php' method='POST'>");
printf("<p class=\"g3\" style='top:-200px; left:600px'><button type='submit' style='border: 0; background: transparent'>");
printf("<input type='hidden' value='0' name='cpcomentario'>");
printf("<input type='hidden' value='$idreceita' name='cpreceita'>");
printf("<input type='hidden' value='$idusuario' name='cpusuario'>");
echo("<i class='fas fa-exclamation-triangle' alt='submit' style='font-size:25px;'></i></button></form>");
}
#--------------------------------------------------------------------------------
	
	
#Ingredientes
echo("<div class='column middle'>");
echo("<p class='k18'>INGREDIENTES</p>");
$cmdsql="SELECT txmedidas,txquantidade,txnomeingrediente FROM receitaingrediente, ingrediente WHERE receitaingrediente.idingredientece=ingrediente.idingrediente AND receitaingrediente.idreceitace='$idreceita'";
$execcmd=mysqli_query($link,$cmdsql);
echo("<p class=\"g2\">");
while ( $REG=mysqli_fetch_array($execcmd) )
{
    echo("$REG[txquantidade] $REG[txmedidas] de $REG[txnomeingrediente]\n");
	echo("<br>");
}
echo("</p>");
echo("</div>");

#Modo de preparo
echo("<div class='column middle'>");
printf("<p class='k18'>MODO DE PREPARO</p>");
printf("<p class=\"g2\">$receita[txmodopreparo]</p>");
echo("</div>");
echo("<br><br><br><br><br><br><br><br><br><br><br>");

#Comentário do usuário
if ($idusuario != 0)
{
echo("<p class='k18'>Enviar comentário</p>");
printf("<form action='./ComentarioIns.php' method='POST'>");
printf("<input type='hidden' value='$idusuario' name='idusuario'>");
printf("<input type='hidden' value='$idreceita' name='receita'>");
printf("<input type='text' name='txcomentario' size=20 maxlength=500>");
printf("<input class='button red' type='submit' value='ENVIAR'>");
printf("</form>");
}

#Comentários da receita
echo("<p class='k18'>Comentários</p>");
$cmdsql="SELECT * FROM comentario WHERE idreceitacp = $idreceita";
$sql = mysqli_query($link,$cmdsql);
while ($le = mysqli_fetch_array($sql))
{
	$dt=explode("-",$le['dtcomentario']);
	printf("<p class=\"g3\">$dt[2]/$dt[1]/$dt[0]</p>");
	printf("<p class=\"g3\">$le[txcomentario]</p>");
	
	#like
	printf("<form action='./LikeIns.php' method='POST'>");
	printf("<p class=\"g3\"  style='top:-50px; left:10px'><button type='submit' style='border: 0; background: transparent'>");
	echo("<i class='fas fa-thumbs-up' alt='submit' style='font-size:20px;'></i></button>");
	printf("<input type='hidden' value='$le[idcomentario]' name='cpcomentario'>");
	printf("$le[like11]</p></form>");
	
	#dislike
	printf("<form action='./DeslikeIns.php' method='POST'>");
	printf("<p class=\"g3\" style='top:-50px; left:10px'><button type='submit' style='border: 0; background: transparent'>");
	echo("<i class='fas fa-thumbs-down' alt='submit' style='font-size:20px;'></i></button>");
	printf("<input type='hidden' value='$le[idcomentario]' name='cpcomentario'>");
	printf("$le[dislike11]</p></form>");
	
	#Denuncia
	printf("<form action='./DenunciaIns.php' method='POST'>");
	printf("<p class=\"g3\" style='top:-170px; left:550px'><button type='submit' style='border: 0; background: transparent'>");
	printf("<input type='hidden' value='$le[idcomentario]' name='cpcomentario'>");
	printf("<input type='hidden' value='$idreceita' name='cpreceita'>");
	printf("<input type='hidden' value='$idusuario' name='cpusuario'>");
	echo("<i class='fas fa-exclamation-triangle' alt='submit' style='font-size:20px;'></i></button></form>");

}

printf("</div></div>");

printf("</body>");
printf("</html>");
?>