<?php if(isset($_SESSION['paciente'])):?>

<div class="container">
    <div class="row justify-content-center m-4">
        <a href="?p=consulta_diagnostico" class="btn btn-primary" role="button" aria-pressed="true">Consultar Diagnóstico</a>
    </div>
</div>

<?php else:?> 

<div class="container mt-5 bg-light">
<div class="offset-3 col-6">
    <form action="?p=paciente" method="post">
        <div class="mb-3">
            <label for="input_cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" name="text_cpf"  placeholder="Digite seu CPF"required>
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