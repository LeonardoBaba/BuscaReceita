<?php
printf("<html><body>");
global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
printf("Incluindo o Registro...<br>\n");
$tentativa=TRUE;
while ( $tentativa )
{
	$data = date("Y-m-d");
	$query = mysqli_query($link,"START TRANSACTION");
	$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(iddenuncia)+1 as CMAX FROM denuncia"));
	$cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	if ($_POST['cpcomentario'] == 0)
	{
		$cmd="INSERT INTO denuncia VALUES ('$cp',
									  '$data',
									  '$_POST[cpusuario]',
									  '$_POST[cpreceita]',
									  NULL)";
	}
	else
	{
		$cmd="INSERT INTO denuncia VALUES ('$cp',
									  '$data',
									  '$_POST[cpusuario]',
									  '$_POST[cpreceita]',
									  '$_POST[cpcomentario]')";
	}
	$comando=mysqli_query($link,$cmd);
	switch (TRUE)
	{
		case mysqli_errno($link) == 0 :
		{
			$query=mysqli_query($link,"COMMIT");
			printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
}
header('Location: PaginaReceita.php');
printf("</body></html>");
?>