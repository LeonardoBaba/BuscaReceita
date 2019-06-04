<?php
printf("<html><body>");
session_start();
$idusuario = $_SESSION['cpuser'];
$idreceita = $_SESSION['idreceita'];
global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
$tentativa=1;
while ( $tentativa )
{
	$sql = "SELECT * FROM comentarioaux1 WHERE receita_idreceita = '$idreceita' AND usuario_idusuario = '$idusuario' AND comentario_idcomentario = '$_POST[cpcomentario]'";
	$reg = mysqli_fetch_array(mysqli_query($link,$sql));
	if ($reg['verificacao'] == "")
	{
		$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(like11)+1 as CMAX FROM comentario WHERE idcomentario = '$_POST[cpcomentario]'"));
		$num=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
		$cmd="UPDATE comentario SET like11 = '$num' WHERE idcomentario = '$_POST[cpcomentario]'";
		mysqli_query($link,$cmd);
		$cmd="INSERT INTO comentarioaux1 VALUES ('1', '$idusuario', '$_POST[cpcomentario]', '$idreceita')";
		mysqli_query($link,$cmd);
		$tentativa = 0;
	}
	if ($reg['verificacao'] == "2")
	{
		$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(like11)+1 as CMAX FROM comentario WHERE idcomentario = '$_POST[cpcomentario]'"));
		$num=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
		$cmd="UPDATE comentario SET like11 = '$num' WHERE idcomentario = '$_POST[cpcomentario]'";
		mysqli_query($link,$cmd);
		$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(dislike11)-1 as CMAX FROM comentario WHERE idcomentario = '$_POST[cpcomentario]'"));
		$num=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 0;
		$cmd="UPDATE comentario SET dislike11 = '$num' WHERE idcomentario = '$_POST[cpcomentario]'";
		mysqli_query($link,$cmd);
		$cmd="UPDATE comentarioaux1 SET verificacao = '1' WHERE receita_idreceita = '$idreceita' AND usuario_idusuario = '$idusuario' AND comentario_idcomentario = '$_POST[cpcomentario]'";
		mysqli_query($link,$cmd);
		$tentativa = 0;
	}
	else
	{
		$tentativa = 0;
	}
}
header('Location: PaginaReceita.php');
printf("</body></html>");
?>