<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'contaPoupança.php';
    require_once 'pessoa.php';

    $pessoa01 = new pessoa("Alice");
    $pessoa02 = new pessoa("Bob");

    $conta1 = new contaCorrente(002,'F',1000);
    $conta2 = new contaPoupança(150,'F',15);
    ?>
</body>
</html>