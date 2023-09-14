<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contaCliente</title>
</head>
<body>
    <?php
    require_once "contaCliente.php";

    $conta = new contaCliente('001','PF');

    $multa = $conta -> calcularMulta (1000);
    
    $numero = $conta -> getNumero();
    $conta -> setSaldo(1500);
    $saldoConta = $conta ->getSaldo();

    
    echo "Multa Calculada $multa <br>";
    echo "Numero conta: $numero <br>";
    echo "Tipo conta: $conta->tipoConta <br>";
    echo "Saldo Atual: $saldoConta";
    ?>
</body>
</html>