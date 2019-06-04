<?php
printf("<html>\n<body>");
    global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $cmd="UPDATE ingrediente SET txnomeingrediente  = '$_POST[txnomeingrediente]'
                          WHERE idingrediente='$_POST[idingrediente]'";
    printf("Alterando o Registro...<br>\n");
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
          printf("Registro <b>Alterado</b> com sucesso!<br>\n");
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
    break;
  } 
header('Location: PerfilAdm.php');
printf("</body>\n</html>");
?>
