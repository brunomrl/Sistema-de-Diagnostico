<?php
    include "config.php";
    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];
    }

    $sql = "DELETE FROM doenca WHERE id = $codigo";
    $conexao->query($sql) or die ("Erro ao executar a query: $sql");
    
?>
Excluido com Sucesso!
<br>
<a href="?p=listar_doenca" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
