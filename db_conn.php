<?php

$servename = "localhost";
$username = "root";
$passaward = "";
$dbname = "crud";

//criando conexão com o banco de dados
$conn = mysqli_connect($servename, $username, $passaward, $dbname);


//verificando conexão
if(!$conn){
    die("conexão falhou" . mysqli_connect_error());

}
//echo "conectou ao banco de dados";