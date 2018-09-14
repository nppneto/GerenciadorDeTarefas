<?php

require 'banco.php';

remover_tarefa($conn, $_GET['id']);

header('Location: tarefas.php');