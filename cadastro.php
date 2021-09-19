<form class="container mb-3 mt-5 bg-light" name="myForm" action="?p=diagnostico" method="post">
  
  
<div class="form-row">
    <div class="form-group col-12">
      <label for="inputcpf">Nome</label>
      <input type="text" class="form-control" id="nome" name="text_nome" placeholder="Digite seu Nome Completo">
    </div>
</div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputcpf">CPF</label>
      <input type="text" class="form-control" id="cpf" name="text_cpf" placeholder="Digite seu CPF">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="text_email"  placeholder="Email">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" name="text_cidade" id="inputCity">
    </div>
    
  <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
        <select id="inputEstado" class="form-control" name="text_estado">
        <option selected>Escolher...</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>
  </div>

  <div class="form-group col-md-2">
    <label for="inputCEP">CEP</label>
    <input type="text" class="form-control" name="text_cep" id="CEP">
  </div>
  
  <div class="form-group col-md-4">
      <label for="inputEstado">Sintoma 1</label>
        <select id="inputEstado" class="form-control" name="text_sintoma1">
        <option selected>Escolher...</option>
        <option value="Tosse">Tosse</option>
        <option value="Febre">Febre</option>
        <option value="Dor de Cabeça">Dor de Cabeça</option>
        <option value="Coriza">Coriza</option>
        <option value="Cansaço">Cansaço</option>
        <option value="Manchas na Pele">Manchas na Pele</option>
        <option value="Formingamento nos membros">Manchas na Pele</option>
        <option value="Dores nas Articulações">Dores nas Articulações</option>
        <option value="Manchas na Pele">Manchas na Pele</option>
         </select>
  </div>

  <div class="form-group col-md-4">
      <label for="inputEstado">Sintoma 2</label>
        <select id="inputEstado" class="form-control" name="text_sintoma2">
        <option selected>Escolher...</option>
        <option value="Tosse">Tosse</option>
        <option value="Febre">Febre</option>
        <option value="Dor de Cabeça">Dor de Cabeça</option>
        <option value="Coriza">Coriza</option>
        <option value="Cansaço">Cansaço</option>
        <option value="Manchas na Pele">Manchas na Pele</option>
        <option value="Dores nas Articulações">Dores nas Articulações</option>
        <option value="Manchas na Pele">Manchas na Pele</option>
         </select>
  </div>

  <div class="form-group col-md-4">
      <label for="inputEstado">Sintoma 3</label>
        <select id="inputEstado" class="form-control" name="text_sintoma3">
        <option selected>Escolher...</option>
        <option value="Tosse">Tosse</option>
        <option value="Febre">Febre</option>
        <option value="Dor de Cabeça">Dor de Cabeça</option>
        <option value="Coriza">Coriza</option>
        <option value="Cansaço">Cansaço</option>
        <option value="Manchas na Pele">Manchas na Pele</option>
        <option value="Dores nas Articulações">Dores nas Articulações</option>
        <option value="Manchas na Pele">Manchas na Pele</option>
         </select>
  </div>
 
<button type="submit" class="btn btn-primary">Gerar Diagnóstico</button>
  
</form>

