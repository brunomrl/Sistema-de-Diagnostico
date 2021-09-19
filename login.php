<?php

$usuario = $_POST['user'];
$senha = $_POST['pwd'];

//VERIFICAR SE OS CAMPOS EXISTEM
if(!isset($_POST['user']) || !isset($_POST['pwd'])){
    die('ERRO - Não existem os campos necessários');
}    

//VERIFICAR SE OS CAMPOS ESTÃO PREENCHIDOS   
if(empty($_POST['user']) || empty($_POST['pwd'])){
    die('ERRO - Os campos não estão preenchidos');
}


if(strlen($usuario) < 5 || strlen($usuario > 10)){
    die('ERRO - O usuário deve ter entre 5 e 10 caracteres');
}

if(strlen($senha) < 3 || strlen($senha > 16)){
    die('ERRO - A senha deve ter entre 3 e 16 caracteres');
}

echo 'Usuário:'.$usuario;
echo '<br>';
echo 'Senha:' .$senha;

