<?php
include("connection.php");

//Verificar se tem um post
if ($_POST) {

    $id = $_POST['id'];
    $name = $_POST['nome'];
    $cpf = $_POST['cpf'] ?? null;
    $aniver = $_POST['aniver'] ?? null;
    $date = new DateTime($aniver) ?? null;
    $aniver = $date->format('Y-m-d');

    
    if (empty($id)) {
        $inc = "INSERT INTO usuarios (nome, cpf, aniversario) VALUES ('$name', '$cpf', '$aniver')";
        $conn->query($inc) or die($conn->error);
    }else{
        $inc = "UPDATE usuarios SET nome='$name', cpf='$cpf', aniversario='$aniver' where id='$id'";
        $conn->query($inc) or die($conn->error);
    }
}


$consulta = "SELECT * FROM usuarios";
$con = $conn->query($consulta) or die($conn->error);
