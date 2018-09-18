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

    $partes = explode('/', $data);

    if(count($partes) != 3) {
        return $data;
    }

    // $data_banco = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

    // return $data_banco;

    $objeto_data = DateTime::createFromFormat('d/m/Y', $data);

    return $objeto_data->format('Y-m-d');
}

function traduz_data_para_exibir($data) {
    if($data == "" OR $data == "0000-00-00") {
        return "";
    } 

    $partes = explode("-", $data);

    if(count($partes) != 3) {
        return $data;
    }

    // $data_tela = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    // return $data_tela;

    $objeto_data = DateTime::createFromFormat('Y-m-d', $data);

    return $objeto_data->format('d/m/Y');

    // if($regiao == 'EUA') {
    //     $resultado = $objeto_data->format('Y/m/d');
    // }
    // else {
    //     $resultado = $objeto_data->format('d/m/Y');
    // }
}

function tem_post() {
    if(count($_POST) > 0) {
        return true;
    }
    
    return false;
}

function validar_data($data) {
    $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    $resultado = preg_match($padrao, $data);

    if($resultado == 0) {
        return false;
    }

    $dados = explode("/", $data);

    $dia = $dados[0];
    $mes = $dados[1];
    $ano = $dados[2];

    $resultado = checkdate($mes, $dia, $ano);

    // checkdate retorna true/false... o retorno será o resultado da comparação entre checkdate e 1
    // 0 = false ------ 1 = true;
    return ($resultado == 1);
}