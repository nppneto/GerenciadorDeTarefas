<?php

function traduz_prioridade($codigo) {
    $prioridade = '';

    switch($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }

    return $prioridade;
}

function traduz_concluida($concluida) {
    if($concluida == 1) {
        return 'Sim';
    }

    return 'Não';
}

function traduz_data_para_banco($data) {
    if ($data == '') {
        return "";
    }

    // $dados = explode('/', $data);

    // $data_banco = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

    // return $data_banco;

    $objeto_data = DateTime::createFromFormat('d/m/Y', $data);

    $data_banco = $objeto_data->format('Y-m-d');

    return $data_banco;
}

function traduz_data_para_exibir($data) {
    if($data == "" OR $data == "0000-00-00") {
        return "";
    } 

    // $dados = explode('-', $data);

    // $data_tela = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    // return $data_tela;

    $objeto_data = DateTime::createFromFormat('Y-m-d', $data);

    $resultado = '';

    if($regiao == 'EUA') {
        $resultado = $objeto_data->format('Y/m/d');
    }
    else {
        $resultado = $objeto_data->format('d/m/Y');
    }

    return $resultado;
}

function tem_post() {
    if(count($_POST) > 0) {
        return true;
    }
    
    return false;
}