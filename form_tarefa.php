<?php
include "connect.php";

$email = $_GET['email'];

$resultado = mysqli_query($link,"SELECT email FROM tb_agenda WHERE email=['email']");

?>