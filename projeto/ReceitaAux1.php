<?php
session_start();

	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
	$reg=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM receita WHERE idreceita='$_POST[pick]'"));
	$_SESSION['altcp'] = $reg['idreceita'];
	$_SESSION['altnomereceita'] = $reg['txnomereceita'];
	$_SESSION['alttempopreparo'] = $reg['txtempopreparo'];
	$_SESSION['altrendimento'] = $reg['txrendimento'];
	$_SESSION['altmodopreparo'] = $reg['txmodopreparo'];

printf("<meta http-equiv=\"Refresh\" content='0; url=./ReceitaAlt.php' />");
?>