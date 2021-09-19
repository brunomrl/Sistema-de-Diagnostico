<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $cpf = $_POST['text_cpf'];
    $nome = $_POST['text_nome'];
    $email = $_POST['text_email'];
    $cidade = $_POST['text_cidade'];
    $estado = $_POST['text_estado'];
    $cep = $_POST['text_cep'];
    $sintoma1 = $_POST['text_sintoma1'];
    $sintoma2 = $_POST['text_sintoma2'];
    $sintoma3 = $_POST['text_sintoma3'];

    include 'gestor.php';
    $gestor = new Gestor();
  
    $doenca = $gestor -> EXE_QUERY
    
    ("SELECT nome FROM doenca WHERE sintoma1 IN('$sintoma1','$sintoma2','$sintoma3')UNION
    SELECT nome FROM doenca WHERE sintoma2 IN('$sintoma1','$sintoma2','$sintoma3')UNION
    SELECT nome FROM doenca WHERE sintoma3 IN('$sintoma1','$sintoma2','$sintoma3')");
         
    $array=array_column($doenca,'nome');
    $diagnostico = implode($array,' <br> ');
  
    $params = array(
        ':email' => $email,
        ':nome' => $nome,
        ':cpf' => $cpf,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':cep' => $cep,
        ':sintoma1' => $sintoma1,
        ':sintoma2' => $sintoma2,
        ':sintoma3' => $sintoma3,
        ':diagnostico' => $diagnostico,
      );

       
    $gestor -> EXE_NON_QUERY("INSERT INTO paciente VALUES(0, :email, :nome, :cpf, :cidade, :estado, :cep,:sintoma1,
    :sintoma2, :sintoma3, :diagnostico)",$params);
}

?>

<div class="container bg-light mt-5">
  <h2 class="text-center">Diagnóstico</h2>
  <h5>Nome:</h5>
  <h3> <?php echo($nome);?></h3>
  <hr>
  <h5>Sintoma(s):</h5>
  <h3> <?php echo($sintoma1);?></h3>
  <h3> <?php echo($sintoma2);?></h3>
  <h3> <?php echo($sintoma3);?></h3>
  <hr>
  <h5>Diagnóstico(s):</h5>
  <h3> <?php echo($diagnostico);?></h3>
</div>