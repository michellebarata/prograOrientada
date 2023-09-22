<?php
class pessoa
{
var $nome;
var $dataNascimento;
var $sexo;

function __construct($nome, $dataNascimento, $sexo)
{
    $this->nome = $nome;
    $this->dataNascimento = $dataNascimento;
    $this->sexo = $sexo;
}
}
?>