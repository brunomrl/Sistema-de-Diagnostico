<?php if(isset($_SESSION['usuario'])):?>

    <div class="container">
        <div class="row justify-content-center m-4">
            <a href="?p=cad_doenca" class="btn btn-primary" role="button" aria-pressed="true">Cadastrar Doenças</a>
        </div>
        <div class="row justify-content-center m-4">
            <a href="?p=listar_doenca" class="btn btn-primary" role="button" aria-pressed="true">Listar/Excluir Doenças</a>
        </div>
        <div class="row justify-content-center m-4">
            <a href="?p=listar_paciente" class="btn btn-primary" role="button" aria-pressed="true">Consultar Dados de Pacientes</a>
        </div>
    </div>

<?php else:?> 

<div class="container mt-5 bg-light">
<div class="offset-3 col-6">
    <form action="?p=restrito" method="post">
        <div class="mb-3">
            <label for="input_usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" name="text_usuario"  placeholder="Digite seu Usuário"required>
        </div>
        <div class="mb-3">
            <label for="input_senha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="text_senha" placeholder="Digite sua Senha"required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <?php if($erro):?>
            <div class="alert-danger text-center form-control">
                Login e/ou Senha Inválidos. Tente Novamente.
            </div>
        <?php endif; ?>
    </form>

</div>

<?php endif?>