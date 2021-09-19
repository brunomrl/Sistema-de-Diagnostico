<?php include "config.php"; ?>

    <table style="width: 100%;" id="tabela">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Sintoma1</td>
                <td>Sintoma2</td>
                <td>Sintoma3</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = $conexao->query("SELECT * FROM doenca");
            while ($row = $consulta->fetch()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['sintoma1']; ?></td>
                    <td><?php echo $row['sintoma2']; ?></td>
                    <td><?php echo $row['sintoma3']; ?></td>
                    <td><a href="index.php?p=excluir_doenca&codigo=<?php echo($row['id']);?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <a href="?p=restrito" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
   
    <script>
        $(document).ready(function() {
            $('#tabela').DataTable({
                "oLanguage": {
                    "sLengthMenu": "Mostrar _MENU_ registros por página",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registro(s)",
                    "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
                    "sInfoFiltered": "(filtrado de _MAX_ registros)",
                    "sSearch": "Pesquisar: ",
                    "oPaginate": {
                        "sFirst": "Início",
                        "sPrevious": "Ant",
                        "sNext": "Próx",
                        "sLast": "Últ"
                    }
                }
            });
        });
    </script>