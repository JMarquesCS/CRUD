<?php
include "db_conn.php";
?>


<!--pagina principal contendo a lista já obtida do banco de dados-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>CRUD</title>
</head>

<body>
    <nav class="cabecalho">
        Lista de Tarefas
    </nav>

    <div class="container">

        <a href="add_new.php" class="btn_add">Adicionar nova Tarefa</a>

        <table class="table table-hover text-center">
        <thead class="table-dark">
            <th class="titulo" >Título</th>
            <th class="descricao">Descrição</th>
            <th class="acoes">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //listando a tabela do banco de dados criado
            $sql = "SELECT * FROM `lista de afazeres`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td class="titulo"><?php echo $row["titulo"] ?></td>
                <td class="descricao"><?php echo $row["descricao"] ?></td>
                <td>
                <a href="edit.php?id=<?php echo $row["id"] ?>" class="btn_edit"> Editar </i></a>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn_delet"> Excluir </i></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>
</body>

</html>