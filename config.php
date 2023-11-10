<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('BASE','cadastro');

    // Cria a conexão
    $conn = new mysqli(HOST,USER,PASSWORD,BASE);

    // Verifica se ocorreu algum erro na conexão
    if ($conn->connect_error) {
       die("Falha na conexão: " . $conn->connect_error);
    }


?>