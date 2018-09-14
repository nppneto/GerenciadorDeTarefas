<?php 

session_start();

require "banco.php";
require "funcoes.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];


// session_destroy();

if(tem_post()) {

    $tarefa = [];

    if(array_key_exists('nome', $_POST) && strlen($_POST['nome']) > 0) {
        $tarefa['nome'] = $_POST['nome'];
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório';
    }
    
    if(array_key_exists('descricao', $_POST)) {
        $tarefa['descricao'] = $_POST['descricao'];
        
    }
    else {
        $tarefa['descricao'] = '';
    }

    if(array_key_exists('prazo', $_POST)) {
        $tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
        
    }
    else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_POST['prioridade'];

    if(array_key_exists('concluida', $_POST)) {
        $tarefa['concluida'] = '1';
    }
    else {
        $tarefa['concluida'] = '0';
    }


    if(!$tem_erros) {
        gravar_tarefas($conn, $tarefa);
        header('Location: tarefas.php');
        die();        
    }
    
}

// if (isset($_SESSION['listaTarefas'])) {
//     $listaTarefas = $_SESSION['listaTarefas'];
//     echo 'oi';
// }

$listaTarefas = buscar_tarefas($conn);

require "template.php";

