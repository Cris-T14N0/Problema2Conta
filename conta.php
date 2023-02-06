<?php
//Puxar dados inseridos da conta
$nome = $_POST['nome'];
$saldo = $_POST['saldo'];

//Criar classe da conta
class conta
{
    private $nomeConta;
    private $saldoConta;

    function __construct($nomeInput, $precoInput)
    {
        $this->nomeConta = $nomeInput;
        $this->saldoConta = $precoInput;
    }

    public function getnome()
    {
        return $this->nomeConta;
    }

    public function getsaldo()
    {
        return $this->saldoConta;
    }
}

#Instanciar / Criar conta
$contaUsuario = new conta($nome, $saldo);

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
    
    <?php echo "Bem-vindo ", $contaUsuario->getnome(), "!"; ?>

    </h1> <p> <br>

    <h2>
    <?php echo "O seu saldo: ", $contaUsuario->getsaldo(), "€"; ?>

    </h2>

    <h3>
    <form action="levantamento" method="post">

    <label>Efetuar levantamento: </label>
    <input type = "submit" value = "Levantar">
    
</body>
</html>