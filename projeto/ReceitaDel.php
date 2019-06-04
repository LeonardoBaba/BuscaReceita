<?php
printf("<html>\n<body>");
    $pk = $_POST['cpreceita'];
    global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $cmd="DELETE FROM receitaingrediente WHERE idreceitace='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM categoriareceita WHERE idreceitace='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM denuncia WHERE idreceitace='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM comentarioaux1 WHERE receita_idreceita='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM comentario WHERE idreceitacp='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM favoritos WHERE receita_idreceita='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM livroreceitas WHERE idreceitace='$pk'";
    $query=mysqli_query($link,$cmd);
    $cmd="DELETE FROM receita WHERE idreceita='$pk'";
    $query=mysqli_query($link,$cmd);
	printf("<meta http-equiv=\"Refresh\" content='0; url=./Perfil.php' />");
?>