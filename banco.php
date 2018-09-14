<?php

 $host = 'localhost';
 $user = 'developer';
 $pass = 'vertrigo';
 $db = 'tarefas';

$conn = mysqli_connect($host, $user, $pass, $db);

// var_dump($conn);

if(mysqli_connect_errno($conn)) {
    echo "Problemas para se conectar ao banco. Erro: ";
    echo mysqli_connect_error();
    exit('Falha critica de conexão com o banco de dados');

}

//mysqli_select_db($conn);

function buscar_tarefas($_conn) {
    $sqlBusca = "SELECT * FROM tarefas";
    $resultado = mysqli_query($_conn, $sqlBusca);

    $tarefas = [];

    while($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    // var_dump($tarefas);

    return $tarefas;

}

function gravar_tarefas($_conn, $tarefa) {
    $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao, prazo, prioridade, concluida)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prazo']}',
            '{$tarefa['prioridade']}',
            '{$tarefa['concluida']}'
        )
    ";

    // var_dump($sqlGravar);

    mysqli_query($_conn, $sqlGravar);
}

function buscar_tarefa($_conn, $id) {
    $sqlBusca = "SELECT * FROM tarefas WHERE id = $id";

    // var_dump($sqlBusca);

    $resultado = mysqli_query($_conn, $sqlBusca);

    // var_dump(mysqli_fetch_all($resultado));

    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($_conn, $tarefa) {
    $sqlEditar = 
    "UPDATE tarefas SET
        nome = '{$tarefa['nome']}',
        descricao = '{$tarefa['descricao']}',
        prazo = '{$tarefa['prazo']}',
        prioridade = '{$tarefa['prioridade']}',
        concluida = '{$tarefa['concluida']}'
    WHERE id = {$tarefa['id']}";

    // var_dump($sqlEditar);

    mysqli_query($_conn, $sqlEditar);
}

function remover_tarefa($_conn, $id) {
    $sqlRemover = "DELETE FROM tarefas WHERE id = $id";

    mysqli_query($_conn, $sqlRemover);
}

