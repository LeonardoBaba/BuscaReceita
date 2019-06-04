<html>
<body>
<?php
global $link;
session_start();
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
$erro =FALSE;
    $aaa="SELECT * FROM usuario ORDER BY idusuario";
	$execcmd=mysqli_query($link,$aaa);
	while ( $REG=mysqli_fetch_array($execcmd) ){
		if("$_POST[login]"=="$REG[txemail]"){
			if("$_POST[senha]"=="$REG[txsenha]"){
				if($REG['txtipo']=="A"){
					$_SESSION['cpuser'] = "$REG[idusuario]";
					$_SESSION['tipouser'] = "$REG[txtipo]";
					printf("<meta http-equiv=\"Refresh\" content='0; url=./PerfilAdm.php' />");
					$erro=FALSE;
				}else{
					$_SESSION['cpuser'] = "$REG[idusuario]";
					printf("<meta http-equiv=\"Refresh\" content='0; url=./Perfil.php' />");
					$erro=FALSE;
				}
			}else{
				printf("$_POST[senha]-$REG[txsenha]");
				printf("<meta http-equiv=\"Refresh\" content='0; url=./Login.html' />");
				$erro= TRUE;
			}
		}
	}
?>
</body>
</html>