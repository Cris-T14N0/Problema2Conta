<?php

$nome = $_POST['nome'];
$saldo = $_POST['saldo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p> <h1>

    <?php echo "Bem-vindo ", $nome, "!"; ?>

    </h1> <p> <br>

    <h2>
    <?php echo "O seu saldo: ", $saldo, "€"; ?>

    </h2>

    <h3>
    <form action="levantamento" method="post">

    <label>Efetuar levantamento: </label>
    <input type = "submit" name = "Levantar">
    

</body>
</html>