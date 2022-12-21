<?php
 
$name = $_POST['nome'];
$cpf = $_POST['cpf'];
$aniver = $_POST['aniver'];
$date = new DateTime($aniver);

$aniver = $date->format('m/d/Y');


echo "Seu nome é $name, seu cpf é: $cpf, seu aniversario é: $aniver";