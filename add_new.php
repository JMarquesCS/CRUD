
<?php
include "db_conn.php";


//inserindo dados no banco de dados com os dados recebidos do form 
if (isset($_POST["submit"])) {
   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];

   $sql = "INSERT INTO `lista de afazeres` (`titulo`, `descricao`) VALUES ('$titulo','$descricao')";

   $result = mysqli_query($conn, $sql);
}

?>
<!--criando uma pagina htm com um formulario para o cadastro da nova tarefa no banco de dados-->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css">
   
   <title>Cadastrar Tarefa</title>
</head>

<body>

   <div class="container">
      <div class="container">
         <form action="" method="post"  class="divForm" id="meuFormulario">
         <div class="container">
            <div class="text-center">
               <h3>Adicione Sua Nova Tarefa</h3>
            </div>
         </div>
            <div navForm>
               <div class="form">
                  <label class="form-label" >Titulo:</label>
                  <input type="text" class="form-control" name="titulo" required>
               </div>

               <div class="form">
                  <label class="form-label">Descrição:</label>
                  <input type="text" class="form-control" name="descricao" required>
               </div>
            </div>
            <div class="btnDiv">
               <button id="botao" type="submit" class="btn btn-success btnSave" name="submit" required href="index.php">Salvar</button>
               <a href="index.php" class="btn btnCancel">Voltar</a>
               </div>
            </div>
         </form>

   </div>

</body>

</html>
