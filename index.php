<?php
include("back/connection.php");
//Capturar o ID
$id = $_GET['id'];
//Buscar o registro pelo ID no banco da dados
$consulta = "SELECT * FROM usuarios WHERE id = '$id' ";
$con = $conn->query($consulta) or die($conn->error);

//Passar esse registro para variaveis
$result = $con->fetch_assoc();

//Incluir as variaveis no form


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="back/code.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="table.php" method="POST">
            <div class="form-group">
                <label for="formGroupExampleInput">Nome Completo </label>
                <input type="text" class="form-control" value="<?=$result['nome'] ?? null?>" id="formGroupExampleInput" placeholder="Nome" name="nome">
                <input type="hidden" name="id" value="<?=$result['id'] ?? null?>"/>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">CPF</label>
                <input type="text" class="form-control" value="<?=$result['cpf'] ?? null?>" id="formGroupExampleInput2" placeholder="123.456.789-00" name="cpf">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Aniversário</label>
                <input type="date" class="form-control" value="<?=$result['aniversario'] ?? null?>" id="formGroupExampleInput3" placeholder="11/11/2022" name="aniver">
            </div>
            <button type="submit" class="btn btn-primary btn-lg mt-3 w-25 p-3" value="Cadastrar" name="Enviar">Enviar</button>
        </form>
    </div>
</body>
<script src="js/script.js"></script>

</html>