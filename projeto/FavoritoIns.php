<?php
printf("<html><body>");
session_start();
$idusuario = $_SESSION['cpuser'];
$_SESSION['nomelivro'] = "favoritos";
$idreceita = $_POST['cpreceita'];
global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
$tentativa=1;
while ( $tentativa )
{
	$sql = "SELECT * FROM favoritos WHERE receita_idreceita = $idreceita AND usuario_idusuario = '$idusuario'";
	$reg = mysqli_fetch_array(mysqli_query($link,$sql));
	if ($reg['verificacao'] == "")
	{
		$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(qtfavoritos)+1 as CMAX FROM receita WHERE idreceita = '$idreceita'"));
		$cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
		$cmd="UPDATE receita SET qtfavoritos = '$cp' WHERE idreceita = '$idreceita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				$tentativa=FALSE;
				$mostra=TRUE;
				break;
			}
			case mysqli_errno($link) == 1213 :
			{
				$query=mysqli_query($link,"ROLLBACK");
				$tentativa=TRUE;
				break;
			}
			case mysqli_errno($link) != 0 AND  mysqli_errno($link)!= 1213 :
			{
				printf("<b>Erro na tentativa de Inserir!</b><br>\n");
				$mens=mysqli_errno($link)." : ".mysqli_error($link);
				printf("Mensagem: $mens<br>\n");
				$query=mysqli_query($link,"ROLLBACK");
				$tentativa=FALSE;
				$mostra=FALSE;
				break;
			}
		}
		printf("<br>\n");
		$sql = "INSERT INTO favoritos VALUES ('1', '$idreceita', '$idusuario')";
		$comando=mysqli_query($link,$sql);
		$tentativa = 0;
	}
	else
	{
		$tentativa = 0;
	}
}
$_SESSION['cpreceita'] = $idreceita;
$_SESSION['nomelivro'] = "Favoritos";
printf("<meta http-equiv=\"Refresh\" content='0; url=./LivroInsAux.php' />");
printf("</body></html>");
?>