<?php
session_start();

global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
$rendimento = $_SESSION['rendimento'];
$tempopreparo = $_SESSION['tempopreparo'];
$nomereceita = $_SESSION['nomereceita'];
$modopreparo = $_SESSION['modopreparo'];
$cpzada = $_SESSION['pk'];
echo("<html>");
echo("<head>");
echo("<title>Cadastro de Receita</title>");
echo("<meta charset='utf-8'>");
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

echo("		p.y1{");
echo("		  position: relative;");
echo("		  top: 100px;");
echo("		}");

echo("	a, u {");
echo("	   text-decoration: none;");
echo("	}");

echo("			</style>");
echo("</head>");

echo("<body>");
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
echo("	<div class=\"Retangulo_7\"><div class=\"CADASTRO_DE_USUARIO\">CADASTRO DE RECEITA</div></div>");

echo("	<div class=\"row\">");
echo("	  <div class=\"column side\"></div>");

echo("<div class='column middle'>");
echo("<form action='./ReceitaIns.php' method='POST' enctype='multipart/form-data'>");
echo("<input type='hidden' name='sub' value='0'>");
echo("<input type='hidden' name='deling' value=''>");
echo("<input type='hidden' name='delcat' value=''>");
echo(" <div class='t3'> ");
echo(" 	<p class='t3' style='left:352px'>Nome da Receita </p> ");
echo(" 	<p class='t4' style='left:352px'><input type='text' name='nomereceita' value=\"$nomereceita\" size=23 maxlength=50> </p> ");
echo(" 	<p class='t3'style='left:550px'>Tempo de Preparo </p> ");
echo(" 	<p class='t4' style='left:552px'> <input type='text' name='tempopreparo' value=\"$tempopreparo\" size=13 maxlength=50> </p> ");
echo(" 	<p class='t3'style='left:720px'>Rendimento </p> ");
echo(" 	<p class='t4'style='left:720px'><input type='text' name='rendimento' value=\"$rendimento\" size=10 maxlength=50> </p> ");
echo(" 	<p class='t3'style='left:835px'>Categoria</p> ");
echo(" 	<p class='t4'style='left:835px'>");
$cmdsql="SELECT * FROM categoria ORDER BY txnomecategoria";
$execcmd=mysqli_query($link,$cmdsql);
echo("<select name='categoria'>\n");
while ( $REG=mysqli_fetch_array($execcmd) )
{
	echo("<option value='$REG[idcategoria]'>$REG[txnomecategoria]</option>\n");
}

echo("</select><button type='submit' name='sub' value='cat' class='add'>+</button></p>\n");
echo(" </div> ");



echo("<br>");
echo(" <div class='t5'> ");
echo("	<div class='t1' style='margin-top: 15%'><p class='t1'>INGREDIENTES</p>");
echo(" 	<p class='t5' style='left:352px'>QUANTIDADE </p> ");
echo(" 	<p class='t6' style='left:352px'><input type='text' name='quantidade' size=13 maxlength=50> </p> ");
echo(" 	<p class='t5'style='left:488px'>MEDIDA </p> ");
echo(" 	<p class='t6' style='left:487px'><input type='text' name='medida' size=20	 maxlength=50>  </p> ");
echo(" 	<p class='t5'style='left:687px'>INGREDIENTE </p> ");
$cmdsql="SELECT * FROM ingrediente ORDER BY txnomeingrediente";
$execcmd=mysqli_query($link,$cmdsql);
echo("<p class='t6'style='left:687px'><select name='ingrediente'>\n");
while ( $REG=mysqli_fetch_array($execcmd) )
{
	echo("<option value='$REG[idingrediente]'>$REG[txnomeingrediente]</option>\n");
}
echo("</select></p>\n");
echo(" 	<p class='t6'style='left:800px'><input type='submit' name='sub' value='+'></p> ");

echo(" </div> ");
echo(" </div> ");

echo("   ");
echo("<br>");
echo(" ");

echo("<div class='column middle'>");
printf("INGREDIENTES<br>");//print meramente pra me organizar
$cmdsql="SELECT idreceitaingrediente,txmedidas,txquantidade,txnomeingrediente FROM receitaingrediente, ingrediente WHERE receitaingrediente.idingredientece=ingrediente.idingrediente AND receitaingrediente.idreceitace='$cpzada'";
$execcmd=mysqli_query($link,$cmdsql);
while ( $REG=mysqli_fetch_array($execcmd) )
{
	echo("$REG[txquantidade] $REG[txmedidas] de $REG[txnomeingrediente]<button type='submit' name='deling' value='$REG[idreceitaingrediente]' class='add'>-</button><br>\n");
}
echo("</div>");


echo("<div class='column middle'>");
printf("CATEGORIA<br>");//print meramente pra me organizar
$cmdsql="SELECT idcategoriareceita,txnomecategoria FROM categoriareceita, categoria WHERE  categoriareceita.idcategoriace=categoria.idcategoria AND categoriareceita.idreceitace='$cpzada'";
$execcmd=mysqli_query($link,$cmdsql);
while ( $REG=mysqli_fetch_array($execcmd) )
{
	echo("$REG[txnomecategoria]<button type='submit' name='delcat' value='$REG[idcategoriareceita]' class='add'>-</button><br>\n");//colocar um icone nesse botao nao pode mudar nem o nome nem o value. mas tem q mudar a aparecencia
}
echo("</div>");


echo("<p class='y1'>");

###################tive q mudar de textarea pra input type text entao tem q aumentar a caixa de escrever o mat falou q é css
echo("<input type='text' name='modopreparo' value=\"$modopreparo\" size='80'><br><br><br><br></p>");
echo("<p class='t1'>MODO DE PREPARO</p>");
###############colocar css nessa parte de baixo pegar imagem ou deixa aqui ficou relativamente bonito
echo("ENVIAR IMAGEM<br>");
echo("<input type='file' name='imagem'><br><br><br>");
#---------------------------------ingredientes da receita

#------------------------------------------catdareceita

#mudar os botoes pro padrao do projeto
echo("<input class='button gray' type='submit' name='sub' value='CANCELAR'>");
echo("<input class='button red' type='submit' name='sub'  value='ENVIAR'>");
echo("</div>");
echo("</form>");

echo("</body>");
echo("</html>");
?>