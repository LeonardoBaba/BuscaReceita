<?php 
printf("<html><body>");
	global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $aaa="SELECT * FROM categoria";
	$execcmd=mysqli_query($link,$aaa);
	$tentativa=TRUE;
	while ( $REG=mysqli_fetch_array($execcmd) ){
		if("$_POST[nomecategoria]"=="$REG[txnomecategoria]"){
			$tentativa=FALSE;
			printf("Categoria já existe");
			break;
		}
	}
    while ( $tentativa )
    {
      $query = mysqli_query($link,"START TRANSACTION");
      $proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idcategoria)+1 as CMAX FROM categoria"));
      $cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	  $cmd="INSERT INTO categoria VALUES ('$cp',
                                        '$_POST[nomecategoria]')";
	  #printf("$cmd");
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
    break;
  }
  header('Location: PerfilAdm.php');
  printf("</body></html>");
  ?>