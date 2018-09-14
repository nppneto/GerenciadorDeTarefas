<!DOCTYPE html>
<table>
    <tr>
        <th>Tarefas</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
        <th>Opções</th>   <!-- A nova coluna de opções -->
    </tr>

    <?php foreach($listaTarefas as $tarefa) : ?>

        <tr>
            <td><?php echo $tarefa['nome']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td>
            <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
            <td><?php echo traduz_prioridade($tarefa['prioridade']) ?></td>
            <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
            <td>
                <!-- O campo com os links para editar e remover tarefas -->
                <a href="editar.php?id=<?php echo $tarefa['id']; ?>">Editar</a>
                <a href="remover.php?id=<?php echo $tarefa['id']; ?>">Remover</a>
            </td>
        </tr>

    <?php endforeach; ?>    
</table>
