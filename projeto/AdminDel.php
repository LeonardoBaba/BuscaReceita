<?php
    global $link;
	  $link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $cmd="DELETE FROM comentarioaux1 WHERE usuario_idusuario='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $cmd="DELETE FROM denuncia WHERE idusuarioce='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $cmd="DELETE FROM favoritos WHERE usuario_idusuario='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $cmd="DELETE FROM comentario WHERE idusuarioce='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $aaa="SELECT * FROM livrodereceita WHERE idusuarioce='$_POST[idusuario]'";
    $execcmd=mysqli_query($link,$aaa);
	  while ( $reg=mysqli_fetch_array($execcmd) ){
      $cmd="DELETE FROM livroreceitas WHERE idlivroce='$reg[idlivro]'";
      $comando=mysqli_query($link,$cmd);
    }
    $cmd="DELETE FROM livroreceitas WHERE idusuarioce='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $cmd="DELETE FROM livrodereceita WHERE idusuarioce='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $aaa="SELECT idreceita FROM receita WHERE idusuarioce='$_POST[idusuario]'";
    $execcmd=mysqli_query($link,$aaa);
	  while ( $reg=mysqli_fetch_array($execcmd) ){
      $cmd="DELETE FROM receitaingrediente WHERE idreceitace='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
      $cmd="DELETE FROM categoriareceita WHERE idreceitace='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
      $cmd="DELETE FROM denuncia WHERE idreceitace='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
      $cmd="DELETE FROM comentarioaux1 WHERE receita_idreceita='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
      $cmd="DELETE FROM comentario WHERE idreceitacp='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
      $cmd="DELETE FROM favoritos WHERE receita_idreceita='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
      $cmd="DELETE FROM livroreceitas WHERE idreceitace='$reg[idreceita]'";
      $query=mysqli_query($link,$cmd);
    }
    $cmd="DELETE FROM receita WHERE idusuarioce='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
    $cmd="DELETE FROM usuario WHERE idusuario='$_POST[idusuario]'";
    $comando=mysqli_query($link,$cmd);
?>