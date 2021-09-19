<?PHP

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $mensagem_sucesso='';
        $mensagem_erro='';
        $mensagem_erro_campo='';
        $mensagem_erro_email='';

        
        //verifica se existem os campos na página. Obs: é possível apagá-los pelo Inspect
        if(!isset($_POST['text_email']) ||
        !isset($_POST['text_assunto']) || 
        !isset($_POST['text_mensagem'])){
            
            $mensagem_erro_campo = "Pelo menos um dos campos não existe";
        }

        $email = $_POST['text_email'];
        $assunto = $_POST['text_assunto'];
        $mensagem = $_POST['text_mensagem'];

        //se existirem os campos será usada a função do PHP para validar o e-mail
                              
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $mensagem_erro_email = "Endereço de e-mail inválido";
        }
    
        
        include("enviar_email.php");

        $resultado=mail($email, $assunto, $mensagem);
        if(empty($resultado)){
            $mensagem_erro='Não foi possível enviar. Tente mais tarde.';
        }

        if(empty($mensagem_erro) && empty($mensagem_erro_campo) && empty($mensagem_erro_email)){
            $mensagem_sucesso = "Email Enviado com Sucesso!";
        }
        

    }


?>

<div class="container mt-5 bg-light">
    <div class="offset-3 col-6">
    Use esse canal para entrar em contato com um especialista.
    </div>
</div>


<div class="container mt-5 bg-light">
    <div class="offset-3 col-6">
    
    
    
    <form action="?p=contato" method="post">
            <div class="mb-3">
                <label for="input_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="text_email"  placeholder="Digite seu Email">
            </div>
            <div class="mb-3">
                <label for="input_assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" name="text_assunto" placeholder="Digite seu Email">
            </div>
            <div class="mb-3">
                <label for="input_mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" name="text_mensagem" rows="5" placeholder="Digite sua Mensagem"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </div>
        </form>
    </div>
    
    <?php if(!empty($mensagem_sucesso)):?>
        <div class="alert-success text-center offset-3 col-6">
            <?php echo $mensagem_sucesso;?>
        </div>
    <?php endif;?>

    <?php if(!empty($mensagem_erro)):?>
        <div class="alert-danger text-center offset-3 col-6">
            <?php echo $mensagem_erro;?>
        </div>
    <?php endif;?>

    <?php if(!empty($mensagem_erro_campo)):?>
        <div class="alert-danger text-center offset-3 col-6">
            <?php echo $mensagem_erro_campo;?>
        </div>
    <?php endif;?>

    <?php if(!empty($mensagem_erro_email)):?>
        <div class="alert-danger text-center offset-3 col-6">
            <?php echo $mensagem_erro_email;?>
        </div>
    <?php endif;?>
        
        
    
</div>


<!-- ?php if(empty($erro)):?

<form action="?p=contato" method="post">
    <input type="text" name="text_email" placeholder="Email"><br>
    <input type="text" name="text_assunto" placeholder="Assunto" required><br>
    <textarea name="text_mensagem" cols="30" rows="3" required></textarea><br>
    <input type="submit" value="Enviar Mensagem">
</form>

?php elseif(!empty($erro)):?
    <div class="fonte_erro2">
          <a href="?p=contato">
              ?php echo '<br>'.$erro.". Clique para preencher novamente."?>
          </a>
    </div>
?php endif;? -->

<!-- 
/*
 * Colocamos dentro de um evento window.onload para que comece a execução
 * somente após a página inteira carregar.
 */
window.onload = function() {
    setTimeout(function(){
        // nome da classe do objeto que deseja manipular
        var e = "fonte_erro2"; 

        // obtém o objeto pelo nome da classe
        var o = document.getElementsByClassName(e);                 

       /* 
        * Define a visibilidade como "none". 
        * Dá o mesmo efeito visual de como se estivesse removido.
        * Note que getElementsByClassName retornará uma lista de nós(NodeList).
        * Portanto, para acessar o elemento desejado, é necessário especificar 
        * qual a chave onde ele se encontra. 
        * No exemplo é obviamente a chave 0 (zero) pois é único.
        */
 
        o[0].style.display = 'none';

        

        
        
    }, 5000); // O tempo em milisegundos. 1 segundo = 1000 milisegundos.
}; */ -->
