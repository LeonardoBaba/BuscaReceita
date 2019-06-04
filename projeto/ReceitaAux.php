<?php
session_start();

	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
	$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idreceita)+1 as CMAX FROM receita"));
	$cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	$usuario = $_POST['usuariocp'];
	$_SESSION['pk'] = "$cp";
	$_SESSION['nomereceita'] = '';
	$_SESSION['tempopreparo'] = '';
	$_SESSION['rendimento'] = '';
	$_SESSION['modopreparo'] = '';
	$cmd="INSERT INTO receita VALUES ('$cp',
									  '',
									  '',
									  '',
									  '',
									  '$usuario',
									  '0',
									  '')";

	$query=mysqli_query($link,$cmd);

printf("<meta http-equiv=\"Refresh\" content='0; url=./ReceitaCadastro.php' />");
?>