<form id="cadastro" action="?p=cad_doenca" method="post">
    
    <div class="form-row row justify-content-center">
      <div class="form-group col-md-2">
        <label>Doença</label>
        <input type="text" class="form-control"  name="text_nomedoenca" placeholder="Digite o Nome da Doença">
        <label>Sintoma 1</label>
        <input type="text" class="form-control"  name="text_sintoma1" placeholder="Digite o Nome do Sintoma">
        <label>Sintoma 2</label>
        <input type="text" class="form-control"  name="text_sintoma2" placeholder="Digite o Nome do Sintoma">
        <label>Sintoma 3</label>
        <input type="text" class="form-control"  name="text_sintoma3" placeholder="Digite o Nome do Sintoma">
          <div class="col align-self-center m-4">
            <button type="submit" class="btn btn-primary" id="salvar">Cadastrar Doença</button>
            <a href="?p=restrito" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
          </div>
      </div>
    </div>
    
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nomedoenca = $_POST['text_nomedoenca'];
    $sintoma1 = $_POST['text_sintoma1'];
    $sintoma2 = $_POST['text_sintoma2'];
    $sintoma3 = $_POST['text_sintoma3'];

    include 'gestor.php';
    $gestor = new Gestor();

    $params = array(
        ':nome' => $nomedoenca,
        ':sintoma1' => $sintoma1,
        ':sintoma2' => $sintoma2,
        ':sintoma3' => $sintoma3,
        
    );

    $gestor -> EXE_NON_QUERY("INSERT INTO doenca VALUES(0, :nome,:sintoma1,
    :sintoma2, :sintoma3)",$params);
}
?>