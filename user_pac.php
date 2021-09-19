<?php

    if(!isset($_SESSION['paciente'])){
        return;
        //O uso do return impede que o restanto do código seja lido
    }
?>

<div class="bg-dark text-white text-right p-2 link-top">
    Usuário: <?php echo $_SESSION['paciente']?> | <a class='link-topo' href="?p=logout">Logout</a>
</div>