<?php
include "connect.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

mysqli_query($link,"insert into tb_login(nome,email,senha,dataDeNascimento,cidade,estado)values('$nome','$email','$senha','$dataDeNascimento','$cidade','$estado')");
header('location:login.php');

?>