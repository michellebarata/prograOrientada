<?php
require_once 'atividade_pessoa.php';
class professor extends pessoa
{
    var $disciplina;
    var $salario;

    function __construct($nome, $dataNascimento, $salario, $sexo)
{
    parent::__construct ($nome, $dataNascimento, $sexo);
    $this->salario = $salario;
}
}
?>