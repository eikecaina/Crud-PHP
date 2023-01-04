<?php
require_once("connection.php");

//Receber o parametro get ID - $_GET[nome_da_variavel]
$id = $_GET['id'];
//Montar uma query para excluir o ID
$delete = "DELETE FROM usuarios WHERE  usuarios.id = '$id'";

//Executar a query
$conn->query($delete) or die($conn->error);
//Fazer um redirect para a tela de tabela novamente
header('Location:/table.php');