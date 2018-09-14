<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tarefas.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
<h1>Gerenciador de Tarefas</h1>

<?php require 'formulario.php'; ?>

<?php if($exibir_tabela) : ?>
    <?php require 'tabela.php'; ?>
<?php endif; ?>

</body>
</html>