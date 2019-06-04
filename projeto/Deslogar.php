<?php
printf("<html>");
printf("<head>");
printf("</head>");
printf("<body>");
session_start();

unset($_SESSION['cpuser']);

header('Location: PaginaInicial.php');

printf("</body>");
printf("</html>");
?>