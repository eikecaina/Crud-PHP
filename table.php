<?php
require_once("back/code.php");
?>


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
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Aniversario</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $con->fetch_assoc()) : ?>
                <tr>
                    <th scope="row"><?php echo $row["id"]; ?></th>
                    <td><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["cpf"]; ?></td>
                    <td><?php echo $row["aniversario"]; ?></td>
                    <td>
                        <a href="/index.php?id=<?php echo $row["id"]; ?>">Editar</a>
                        |
                        <a href="/back/deletar.php?id=<?php echo $row["id"]; ?>">Deletar</a>
                    </td>
                <?php endwhile ?>
                
                </tr>
        </tbody>
    </table>
    <a href="index.php">Cadastrar</a>
</body>