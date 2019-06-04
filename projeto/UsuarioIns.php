<?php 
printf("<html><body>");
	global $link;
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    $tentativa=TRUE;
	$imagem = $_FILES['imagem']["name"]; 
	$temp = $_FILES['imagem']["tmp_name"];
	$location = './imagem/';
    while ( $tentativa )
    {
      $query = mysqli_query($link,"START TRANSACTION");
      $proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idusuario)+1 as CMAX FROM usuario"));
      $cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	  if ("$_POST[senha]"=="$_POST[senha2]")
	  {
		  $cmd="INSERT INTO usuario VALUES ('$cp',
                                        '$_POST[nome]',
										'$_POST[senha]',
                                        '$_POST[email]',
                                        '$_POST[dtnascimento]',
                                        '$imagem',
                                        '$_POST[sexo]',
				                    	'$_POST[user]',
						                '$_POST[tipo]')";
	  $comando=mysqli_query($link,$cmd);
      switch (TRUE)
      {
        case mysqli_errno($link) == 0 :
        { 
          $query=mysqli_query($link,"COMMIT");
		  move_uploaded_file($temp, $location.$imagem);
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
	else
	{
		printf("Falha ao tentar cadastrar usuario. <br>\n");
		printf("SENHAS NÃO SÃO IGUAIS<br>");
		printf("<input type='button' value='Voltar' onclick='history.go(-1)'>");
		break;
	}
  }
session_start();
$_SESSION['cpusuario'] = $cp;
$_SESSION['nomelivro'] = "Favoritos";
printf("<meta http-equiv=\"Refresh\" content='0; url=./LivroIns.php' />");
printf("</body></html>");
?>