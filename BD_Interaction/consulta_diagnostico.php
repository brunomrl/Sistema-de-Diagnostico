<?php
    include 'gestor.php';
    $gestor = new Gestor();

    $cpf = ($_SESSION['paciente']);

    $doenca = $gestor -> EXE_QUERY("SELECT diagnostico FROM paciente WHERE cpf = $cpf");
    $nome = $gestor -> EXE_QUERY("SELECT nome FROM paciente WHERE cpf = $cpf");
    $sintoma1 = $gestor -> EXE_QUERY("SELECT sintoma1 FROM paciente");
    $sintoma2 = $gestor -> EXE_QUERY("SELECT sintoma2 FROM paciente");
    $sintoma3 = $gestor -> EXE_QUERY("SELECT sintoma3 FROM paciente");
     
    
    $nome_paciente=array_column($nome,'nome');
    $nome = implode($nome_paciente);
   
    
    $sintoma_1=array_column($sintoma1,'sintoma1');
    $sintoma01 = implode($sintoma_1);
    

    $sintoma_2=array_column($sintoma2,'sintoma2');
    $sintoma02 = implode($sintoma_2);
   

    $sintoma_3=array_column($sintoma3,'sintoma3');
    $sintoma03 = implode($sintoma_3);
        
    $diagnosticos=array_column($doenca,'diagnostico');
    $diagnostico = implode($diagnosticos,' <br> ');


 

?>

<div class="container bg-light mt-5">
  <h2 class="text-center">Diagnóstico</h2>
  <h5>Nome:</h5>
  <h3> <?php echo($nome);?></h3>
  <hr>
  <h5>Sintoma(s):</h5>
  <h3> <?php echo($sintoma01);?></h3>
  <h3> <?php echo($sintoma02);?></h3>
  <h3> <?php echo($sintoma03);?></h3>
  <hr>
  <h5>Diagnóstico(s):</h5>
  <h3> <?php echo($diagnostico);?></h3>
</div>