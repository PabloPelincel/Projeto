<?php
include "connect.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado = mysqli_query($link,"SELECT email,senha FROM tb_login WHERE email='$email' AND senha='$senha'");
$num_row = mysqli_num_rows($resultado);
if ($num_row >=1) {
    header('location:Agenda.php?email=' . $_POST['email']);
} else {
    echo ("Usuário não encontrado");
}

?>