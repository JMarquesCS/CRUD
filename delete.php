<?php
include "db_conn.php";
//funcionalidade de exclusão
$id = $_GET["id"];
$sql = "DELETE FROM `lista de afazeres` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}