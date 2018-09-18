<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $tarefa['id']; ?>"/>
    <fieldset>
        <legend>Nova Tarefa</legend>
        <label for="">
        Tarefa:
        <!-- Mostrando erros na validação do campo nome -->
        <?php if(isset($tem_erros) && array_key_exists('nome', $erros_validacao)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['nome']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="nome" value="<?= $tarefa['nome']; ?>" />
        </label>
        <label for="">
            Descrição (Opcional):
            <textarea name="descricao">
                <?= $tarefa['descricao']; ?>
            </textarea>
        </label>
        <label for="">
            Prazo (Opcional):
            <?php if(isset($tem_erros) && array_key_exists('prazo', $erros_validacao)) : ?>
                <span class="erro">
                    <?php echo $erros_validacao['prazo']; ?>
                </span>
            <?php endif; ?>
            <input type="text" name="prazo" value="<?= $tarefa['prazo']; ?>" />
        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <label for="">
                <input type="radio" name="prioridade" value="1"
                    <?=($tarefa['prioridade'] == 1) 
                    ? 'checked'
                    : '';
                    ?> />Baixa
                <input type="radio" name="prioridade" value="2" 
                    <?= ($tarefa['prioridade'] == 2)
                    ? 'checked'
                    : '';
                    ?>/>Média
                <input type="radio" name="prioridade" value="3"
                    <?= ($tarefa['prioridade'] == 3)
                    ? 'checked'
                    : '';
                    ?>/>Alta
            </label>
        </fieldset>
        <label for="">
            Tarefa concluída:
            <input type="checkbox" name="concluida" value="1" 
            <?= ($tarefa['concluida'] == 1) 
            ? 'checked'
            : '';
            ?>/>
        </label>
        <input type="submit" value=
        <?= ($tarefa['id'] > 0) ? 'Editar' : 'Cadastrar'; ?> />
    </fieldset>
</form>