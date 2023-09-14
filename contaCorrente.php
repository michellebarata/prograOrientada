<?php
class contaCorrente extends ContaCliente
{
    public $limite;
}

function __construct ($numero, $tipoConta, $limiteConta)
{
    parent::__construct ($numero, $tipoConta);
    $this->limite = $limiteConta;
}

function retirar ($valor)
{
    $cpmf = 0.05;
    if (($this->getSaldo()+$this->limite)>=$saldo)
    {
        parent::retirar ($valor);
        parent::retirar ($valor*$cpmf);
    }
}
?>
