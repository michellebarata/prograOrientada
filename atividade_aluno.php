<?php
require_once 'atividade_pessoa.php';
class aluno extends pessoa
{
    var $matricula;
    var $curso;

    function __construct($matricula, $dataNascimento, $curso, $nome, $sexo)
    {
        parent::__construct ($nome, $dataNascimento, $sexo);
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
}
?>