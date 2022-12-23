<?php
include("connection.php");
$consulta = "SELECT * FROM usuarios";
$con = $conn->query($consulta) or die($conn->error);


$name = $_POST['nome'];
$cpf = $_POST['cpf'];
$aniver = $_POST['aniver'];
$date = new DateTime($aniver);
$aniver = $date->format('m/d/Y');

?>

<head>
    <meta charset="UTF-8">
</head>
<body>
    <table>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Aniversario</td>
        </tr>
        <?php while ($dado = $con->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["Name"]; ?></td>
            <td><?php echo $dado["CPF"]; ?></td>
            <td><?php echo $dado["Aniversario"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>