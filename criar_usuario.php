<?php
    include 'gestor.php';
    $gestor = new Gestor();

    $usuario = "Samuel";
    $senha = "abc12344";
    $privilegio = "0";

    $params = array(
        ':usuario' => $usuario,
        ':senha' => password_hash($senha,PASSWORD_DEFAULT),
        ':privilegio' => $privilegio    
    );

    $gestor -> EXE_NON_QUERY("INSERT INTO admins VALUES(0, :usuario, :senha, :privilegio)",$params);
?>