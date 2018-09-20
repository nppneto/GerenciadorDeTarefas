<?php

include "banco.php";

$anexo = buscar_anexo($conn, $_GET['id']);
remover_anexo($conn, $anexo['id']);
unlink('anexos/' . $anexo['arquivo']);

// echo $teste = unlink('anexos/' . $anexo['arquivo']); 

header('Location: tarefa.php?id=' . $anexo['tarefa_id']);