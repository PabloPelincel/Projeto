<?php
include "connect.php";

$email = $_POST['email'];
$titulo = $_POST['titulo'];
$dataHoraInicio = $_POST['dataHoraInicio'];
$dataHoraFim = $_POST['dataHoraFim'];
$statusTarefa = $_POST['statusTarefa'];

mysqli_query($link,"insert into tb_agenda(email,titulo,dataHoraInicio,dataHoraFim,statusTarefa)values('$email','$titulo','$dataHoraInicio','$dataHoraFim','$statusTarefa')");
header('location:Agenda.php?email=' . $_POST['email']);
?>