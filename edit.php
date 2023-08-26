<?php
include "db_conn.php";

//recebendo os novos dados que foram editados da tarefa selecionada na pagina index.php
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];


  $sql = "UPDATE `lista de afazeres` SET `titulo`='$titulo',`descricao`='$descricao' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  //verificando se a tarefa foi editada
  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>



<!-- criando uma pagina html um form para que a tarefa selecionada na pagina index.php possa ser editada-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/script.js" defer></script>
  <link rel="stylesheet" href="css/styles.css">
  <title>PHP CRUD Application</title>
</head>

<body>
  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Sua Tarefa</h3>
    </div>

    <?php
    $sql = "SELECT * FROM `lista de afazeres` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" class="divForm">
        <div class="row mb-3">
          <div class="form">
            <label class="form-label">Titulo:</label>
            <input required type="text" class="form-control" name="titulo" value="<?php echo $row['titulo'] ?>">
          </div>

          <div class="form">
            <label class="form-label">descricao:</label>
            <input required type="text" class="form-control" name="descricao" value="<?php echo $row['descricao'] ?>">
          </div>
        </div>
        <div class="btnDiv">
          <button requerid type="submit" class="btn btn-success btnSubmit" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger btnCancel">Cancel</a>
        </div>
      </form>
    </div>
  </div>


</body>

</html>