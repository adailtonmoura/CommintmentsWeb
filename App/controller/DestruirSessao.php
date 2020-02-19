<?php

session_start(); //inicia manipulação da sessão
session_destroy(); // destroi a sessão e as variáveis
header("Location: http://localhost/CommitmentsWeb/?pagina=login");

?>  