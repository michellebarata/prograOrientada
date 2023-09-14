<?php
class ContaCliente
{
    private $numero;
    private $saldo;
    public $tipoConta;
    private $dataAberturaConta;

    function __construct ($numero, $tipoConta)
    {
        $this -> numero = $numero;
        $this -> tipoConta = $tipoConta;
    }

    function retirar ($valor)
    {
        if ($valor > 0)
        {
            $this -> saldo = $this -> saldo - $valor;
        }
    }

    function getNumero()
    {
        return $this -> numero;
    }

    public function getSaldo()
    {
        return $this -> saldo;
    }

    public function setSaldo($novoValor)
    {
        $this -> saldo = $novoValor-;
    }

    function creditar($valor)
    {
        $this -> saldo = $this -> saldo + $valor;
    }

    function  calcularMulta($valor)
    {
        return $valor * 0.02;
    }
}
?>