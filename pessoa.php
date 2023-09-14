<?php
class pessoa
{
    public $codigo;
    public $nome;
    public $altura;
    public $idade;
    public $nascimento;
    public $salario;
    public $escolaridade;

    function __construct ($nome, $nascimento)
    {
        $this -> nome = $nome;
        $this -> nascimento = $nascimento;
    }

    function crescer ($cm)
    {
        return  $this-> altura = $this-> altura + $cm;
    }

    function formar ($titulo)
    {
        return $this-> escolaridade = $titulo;
    }
}
?>