<?php
printf("<html><body>");
global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
$tentativa=TRUE;
$query = mysqli_query($link,"START TRANSACTION");
$cmd="SELECT * FROM denuncia WHERE iddenuncia = '$_POST[iddenuncia]'";
$reg=mysqli_fetch_array(mysqli_query($link,$cmd));
$denuncia = $reg['iddenuncia'];
$comentario = $reg['idcomentarioce'];
$receita = $reg['idreceitace'];
$usuario = $reg['idusuarioce'];

while ( $tentativa )
{
	if ($_POST['excluir'] == "denuncia")
	{
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM denuncia WHERE iddenuncia = '$denuncia'";
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
	}
	
	
    if ($_POST['excluir'] == "comentario")
	{
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM denuncia WHERE idcomentarioce = '$comentario'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM comentarioaux1 WHERE comentario_idcomentario = '$comentario'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM comentario WHERE idcomentario = '$comentario'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		$tentativa = 0;
	}
	
	
    if ($_POST['excluir'] == "receita")
	{
		#1
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM receitaingrediente WHERE idreceitace='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#2
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM categoriareceita WHERE idreceitace='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#3
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM denuncia WHERE idreceitace='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#4
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM comentarioaux1 WHERE receita_idreceita='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#5
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM comentario WHERE idreceitacp='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#6
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM favoritos WHERE receita_idreceita='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#7
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM livroreceitas WHERE idreceitace='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		#8
		$query = mysqli_query($link,"START TRANSACTION");
		$cmd="DELETE FROM receita WHERE idreceita='$receita'";
		$comando=mysqli_query($link,$cmd);
		switch (TRUE)
		{
			case mysqli_errno($link) == 0 :
			{
				$query=mysqli_query($link,"COMMIT");
				printf("Registro <b>Inserido</b> com sucesso!<br>\n");
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
				$mostra=FALSE;
				break;
			}
		}
		
		$tentativa = 0;
	}	
}
header('Location: PaginaDenuncias.php');
printf("</body></html>");
?>