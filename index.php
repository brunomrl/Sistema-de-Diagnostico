<?php

session_start();

include('layout/html_header.php');
include('layout/topo.php');
include('user.php');
include('user_pac.php');


$pag = 'inicio';

if(isset($_GET['p'])){
    $pag = $_GET['p'];
}



switch($pag) {

    case 'logout':
        session_destroy();
        Header('Location: '.$_SERVER['PHP_SELF']);
        break;
    
    case 'inicio':
        include('inicio.php');
        break;
    
    case 'historia':
        include('historia.php');
        break;

    case 'restrito':
        $erro=false;
        //verifica se foi enviado o formulário de login
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //essa função "cria" a SESSION
            if(verificarlogin_admin()){
                include('user.php');
            }else{
            //login inválido
                $erro = true;
            }
            
        }
        include('restrito.php');
        break;

    case 'paciente':
        $erro=false;
        //verifica se foi enviado o formulário de login
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //essa função "cria" a SESSION
            if(verificarlogin_pac()){
                include('user_pac.php');
            }else{
                //login inválido
                $erro = true;
            }
            
        }
        include('area_paciente.php');
        break;
    
    case 'contato':
        include('contato.php');
        break;

    case 'cadastro':
        include('cadastro.php');
        break;
    
    case 'cad_doenca':
        include('BD_Interaction/cad_doenca.php');
        break;
    
    case 'listar_doenca':
        include('BD_Interaction/listar_doenca.php');
        break;

    case 'excluir_doenca':
        include('BD_Interaction/excluir_doenca.php');
        break;
    
    case 'consulta_diagnostico':
        include('BD_Interaction/consulta_diagnostico.php');
        break;
        
    case 'consulta_diagnostico':
        include('BD_Interaction/diagnostico.php');
        break;
    
    case 'diagnostico':
        include('diagnostico.php');
        break;
        
    case 'listar_paciente':
        include('BD_Interaction/listar_paciente.php');
        break;
        
    case 'excluir_paciente':
        include('BD_Interaction/excluir_paciente.php');
        break;  
    
    default:
        include('inicio.php');
        break;

}   

include('layout/footer.php');
include('layout/html_footer.php');

function verificarlogin_admin(){

    $usuario = $_POST['text_usuario'];
    $senha = $_POST['text_senha'];

    include 'gestor.php';
    $gestor = new Gestor();
    $params = array(
        ':usuario' => $usuario
    );

    $resultado = $gestor -> EXE_QUERY("
        SELECT * FROM admins
        WHERE usuario = :usuario    
    ", $params);

    if(count($resultado) == 0){
        // die('Usuário Inválido');
        return false;
    }else{
        $senha_bd = $resultado[0]['senha'];
        if(password_verify($senha, $senha_bd)){
            $_SESSION['usuario'] = $senha_bd = $resultado[0]['usuario'];
            return true;
        } else {
            //die('Senha Inválida');
            return false;
        }

    }
}   

function verificarlogin_pac(){

    $cpf = $_POST['text_cpf'];
    $senha = $_POST['text_senha'];

    include 'gestor.php';
    $gestor = new Gestor();
    $params = array(
        ':cpf' => $cpf
    );

    $resultado = $gestor -> EXE_QUERY("
        SELECT * FROM paciente
        WHERE cpf = :cpf    
    ", $params);

   

    if(count($resultado) == 0){
        return false;
        //die('Usuário Inválido');
    }else{
        $senha_bd = $resultado[0]['senha'];
        if(password_verify($senha, $senha_bd)){
            $_SESSION['paciente'] = $senha_bd = $resultado[0]['cpf'];
            return true;
        } else {
            return false;
            //die('Senha Inválida');
        }

    }
}  

?>