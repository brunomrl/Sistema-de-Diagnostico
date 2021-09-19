<?php

    if(!isset($_SESSION['usuario'])){
        return;
        //O uso do return impede que o restanto do código seja lido
    }
?>

<div class="bg-danger text-white text-right p-2 link-top">
    Usuário: <?php echo $_SESSION['usuario']?> (Administrador) | <a href="?p=logout">Logout</a>
</div>