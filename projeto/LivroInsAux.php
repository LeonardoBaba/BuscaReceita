<?php 
printf("<html><body>");
session_start();
$receita = $_SESSION['idreceita'];
$nomedolivro = $_SESSION['nomelivro'];
$cpusu = $_SESSION['cpuser'];
	global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $tentativa=TRUE;
	$sql = "SELECT * FROM livrodereceita WHERE idusuarioce = '$cpusu' AND txnomelivro = '$nomedolivro'";
	$aux = mysqli_query($link,$sql);
	$reg = mysqli_fetch_array($aux);
	$iddolivro = $reg['idlivro'];
    while ( $tentativa )
    {
      $query = mysqli_query($link,"START TRANSACTION");
      $proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idlivroaux)+1 as CMAX FROM livroreceitas"));
      $cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	  $cmd="INSERT INTO livroreceitas VALUES ('$receita', '$iddolivro', '$cp')";
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
    break;
  }
  header('Location: PaginaReceita.php');
  printf("</body></html>");
  ?>