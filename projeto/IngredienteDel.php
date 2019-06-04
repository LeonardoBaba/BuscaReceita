<?php
printf("<html>\n<body>");
    global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $cmd="DELETE FROM ingrediente WHERE idingrediente='$_POST[idingrediente]'";
    $tentativa=TRUE;
    while ( $tentativa )
    { 
      $query = mysqli_query($link,"START TRANSACTION");
      $comando=mysqli_query($link,$cmd);
      switch (TRUE)
      {
        case mysqli_errno($link) == 0 :
        { 
          $query=mysqli_query($link,"COMMIT"); 
          printf("Registro <b>Exclu&iacute;do</b> com sucesso!<br>\n");
          $tentativa=FALSE;
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
          printf("<b>Erro na tentativa de Excluir!</b><br>\n");
          $mens=mysqli_errno($link)." : ".mysqli_error($link);
          printf("Mensagem: $mens<br>\n");
          $query=mysqli_query($link,"ROLLBACK");
          $tentativa=FALSE;
          break;
        }
      }  
    printf("<br>\n");
    break;
	}
header('Location: PerfilAdm.php');
printf("</body>\n</html>");
?>