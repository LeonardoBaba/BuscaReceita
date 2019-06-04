<?php 
printf("<html><body>");
session_start();
$nomelivro = $_SESSION['nomelivro'];
$cpusu = $_SESSION['cpusuario'];
	global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $tentativa=TRUE;
    while ( $tentativa )
    {
      $query = mysqli_query($link,"START TRANSACTION");
      $proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idlivro)+1 as CMAX FROM livrodereceita"));
      $cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	  $cmd="INSERT INTO livrodereceita VALUES ('$cp', '$nomelivro', '$cpusu')";
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
    break;
  }
  header('Location: Login.html');
  printf("</body></html>");
  ?>