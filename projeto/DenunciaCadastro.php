<?php

global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");

printf("<html>");
printf("<head>");
printf("<title>Cadastro de Denuncia</title>");
printf("<meta charset='utf-8'>");
printf("</head>");
printf("<body>");
printf("<form action='./DenunciaIns.php' method='POST'>");

printf("<center>CADASTRO DE DENUNCIA</center>");

printf("<br>");

printf("<input type='text' name='txdenuncia' size=100 maxlength=500>");
printf("<input type='text' name='usuarioce' size=10 maxlength=10>");
printf("<input type='text' name='receitace' size=10 maxlength=10>");
printf("<input type='text' name='comentarioce' size=10 maxlength=10>");

printf("<input type='submit' value='ENVIAR'>");

printf("</form>");
printf("</body>");
printf("</html>");
?>