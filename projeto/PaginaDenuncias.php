<?php

global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");

echo("<html>");
echo("<head>");
echo("<title>Denuncia</title>");
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
echo("			left: 360px;");
echo("			top: 310px;");
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


echo("			</style>");
echo("</head>");


printf("<body>");
echo("<div class=\"header\">");
echo("	<p class=\"k1\">RECEITAS OISHII</p>");

echo("	<div class=\"Retangulo_2\"> <i class=\"fas fa-search\" style=></i>	</div>");

echo("	<div class=\"Retangulo_1\"> <i class=\"fas fa-cheese\"></i>	</div> ");

echo("	<i class=\"fas fa-id-card\" style=\"font-size:64px\"></i>");
echo("	<div class=\"Forma_4\"></div>");

echo("	<p class=\"k2\">Entrar<p>");
echo("	<p class=\"k2\">Criar conta<p>");

echo("	<div class=\"k3\">");
echo("	<p class=\"k3\" style=\"left:40px\">Prato Principal </p>");
echo("	<p class=\"k3\"style=\"left:190px\">Prato Principal </p>");
echo("	<p class=\"k3\"style=\"left:350px\">Prato Principal </p>");
echo("	<p class=\"k3\"style=\"left:510px\">Prato Principal </p>");
echo("	<p class=\"k3\"style=\"left:670px\">Prato Principal </p>");
echo("	<p class=\"k3\"style=\"left:830px\">Prato Principal </p>");
echo("	<p class=\"k3\"style=\"left:990px\">Prato Principal </p>");
echo("	</div>");
echo("	</div>");

echo("	<div class=\"Retangulo_7\"><div class=\"CADASTRO_DE_USUARIO\">DENUNCIAS</div></div>");

echo("	<div class=\"row\">");
echo("	  <div class=\"column side\"></div>");

echo("<div class='column middle'>");
printf("<br><br><br><br>");
printf("<form action='./DenunciaExcluir.php' method='POST'>");

printf("<div class='t2'>");
printf("<p class='t2'>");
printf("Código da denúncia");
printf("<input type='text' name='iddenuncia' size=10 maxlength=10>");
printf("</p>");

printf("<p class='t3'>");
printf("Selecione o que deseja excluir<br>");
printf("</p>");
printf("<p class='t4'>");
printf("<br><tr><td>DENUNCIA</td>        <td><INPUT TYPE=RADIO NAME='excluir' VALUE='denuncia' CHECKED></td></tr>\n");
printf("<tr><td>COMENTÁRIO</td>      <td><INPUT TYPE=RADIO NAME='excluir' VALUE='comentario'></td></tr>\n");
printf("<tr><td>RECEITA</td>         <td><INPUT TYPE=RADIO NAME='excluir' VALUE='receita'></td></tr>\n");
printf("<input class='button red' type='submit' value='EXCLUIR'>");
printf("</p>");
printf("</div>");


printf("<br><br><br><br>");
$cmdsql="SELECT * FROM denuncia ORDER BY iddenuncia";
$sql = mysqli_query($link,$cmdsql);
printf("<table border=1>\n");
printf("<tr bgcolor='lightblue'><td>Código da Denúncia</td>
                                <td>Data de Cadastro da Denúncia</td>
                                <td>Código do Usuário que fez a Denúncia</td>
								<td>Código da Receita Denunciada</td>
								<td>Código do Comentário Denunciado</td></tr>\n");
$cor="WHITE";
while ($le = mysqli_fetch_array($sql))
{
	$dtden=explode("-",$le['dtdenuncia']);
	printf("<tr bgcolor='$cor'><td>$le[iddenuncia]</td>
							   <td>$dtden[2]/$dtden[1]/$dtden[0]</td>
							   <td>$le[idusuarioce]</td>
							   <td>$le[idreceitace]</td>
							   <td>$le[idcomentarioce]</td></tr>\n");
}

printf("</table>");




printf("</form>");
printf("<button class='button gray'><A HREF=\"PaginaAdmin.php\">VOLTAR</A></button><br>");
printf("</body>");
printf("</html>");
?>