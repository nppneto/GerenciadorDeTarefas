<?php

include 'banco.php';
include 'funcoes.php';

$tem_erros = false;
$erros_validacao = [];

if(tem_post()) {
    // upload arquivos

    $tarefa_id = $_POST['tarefa_id'];

    if(!array_key_exists('anexo', $_FILES)) {
        $tem_erros = true;
        $erros_validacao['anexo'] = 'Você deve selecionar um arquivo para anexar';
    } else {
        if(tratar_anexo($_FILES['anexo'])) {
            $nome = $_FILES['anexo']['name'];
            $anexo = [
                'tarefa_id' => $tarefa_id,
                'nome' => substr($nome, 0, -4),
                'arquivo' => $nome
            ];
        } else {
            $tem_erros = true;
            $erros_validacao['anexo'] = 'Envie anexos nos formatos zip ou pdf';
        }
    }

    if(!$tem_erros) {
        gravar_anexo($conn, $anexo);
    }

}

// $anexos = [
//     'id' => 0,
//     'nome' => '',
//     'arquivo' => ''
// ];

// $anexos = [];

$tarefa = buscar_tarefa($conn, $_GET['id']);
$anexos = buscar_anexos($conn, $_GET['id']);

include "template_tarefa.php";