<?php

include 'banco.php';
include 'funcoes.php';

$tem_erros = false;
$erros_validacao = [];

if(tem_post()) {
    // upload arquivos
}

$tarefa = buscar_tarefa($conn, $_GET['id']);

include "template_tarefa.php";