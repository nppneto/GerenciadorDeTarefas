<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <div>
        <h1>Tarefa: <?php echo $tarefa['nome']; ?> </h1>
        <p>
            <a href="tarefas.php">
                Voltar para a lista de tarefas
            </a>
        </p>
        <p>
            <strong>Concluída:</strong>
            <?php echo traduz_concluida($tarefa['concluida']); ?>
        </p>
        <p>
            <strong>Descrição:</strong>
            <?php echo nl2br($tarefa['descricao']); ?>
        </p>
        <p>
            <strong>Prazo:</strong>
            <?php echo traduz_data_para_exibir($tarefa['prazo']); ?>
        </p>
        <p>
            <strong>Prioridade:</strong>
            <?php echo traduz_prioridade($tarefa['prioridade']) ?>
        </p>

        <h2>Anexos</h2>
        <!-- lista de anexos -->

        <!-- formulário para um novo anexo -->

    </div>
</body>
</html>