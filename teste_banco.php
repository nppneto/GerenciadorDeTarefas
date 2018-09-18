<?php

 $host = 'localhost';
 $user = 'root';
 $pass = 'vertrigo';
 $db = 'tarefas';

$conn = mysqli_connect($host, $user, $pass, $db);

// var_dump($conn);

if(mysqli_connect_errno($conn)) {
    echo "Problemas para se conectar ao banco. Erro: ";
    echo mysqli_connect_error();
    exit('Falha critica de conexão com o banco de dados');

}