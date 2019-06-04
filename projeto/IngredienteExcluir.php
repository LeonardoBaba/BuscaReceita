<html>
<head>
	<title>Selecione o Admin</title>
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
	</style>
</head>
<body>
<div class="header">
	<p class="k1">RECEITAS OISHII</p>

	<div class="Retangulo_2"> <i class="fas fa-search" style=></i>	</div>

	<div class="Retangulo_1"> <i class="fas fa-cheese"></i>	</div> 

	<i class="fas fa-id-card" style="font-size:64px"></i>

	<div class="Forma_4"></div>

	<p class="k2">Entrar<p>
	<p class="k2">Criar conta<p>

	<div class="k3">
	<p class="k3" style="left:40px">Prato Principal </p>
	<p class="k3"style="left:190px">Prato Principal </p>
	<p class="k3"style="left:350px">Prato Principal </p>
	<p class="k3"style="left:510px">Prato Principal </p>
	<p class="k3"style="left:670px">Prato Principal </p>
	<p class="k3"style="left:830px">Prato Principal </p>
	<p class="k3"style="left:990px">Prato Principal </p>
	</div>
	</div>

	<div class="Retangulo_7"><div class="CADASTRO_DE_USUARIO">SELECIONE O INGREDIENTE À EXCLUIR</div></div>
	
	<div class="row">
	  <div class="column side"></div>
	  
	<div class="column middle">
<?php
  global $link;
  $link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
  $cmdsql="SELECT * FROM ingrediente ORDER BY idingrediente";
  printf("<br><br><p class=\"t1\"><form action='./IngredienteEsc.php' method='POST'>\n");
  $execcmd=mysqli_query($link,$cmdsql);
  printf("<span>Selecione o ingrediente</span>");
  printf("<select name='pick'>\n");
  while ( $REG=mysqli_fetch_array($execcmd) )
  {
    printf("<option value='$REG[idingrediente]'>$REG[idingrediente]-$REG[txnomeingrediente]</option>\n");
  }
  printf("</p></select>\n");
  printf("<br><br><input type='submit'  class=\"button red\" value='CONFIRMAR' >");
  printf("</form>\n");
?>
</div>
</body>
</html>