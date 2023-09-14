<?php
class caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function tampar()
    {
        $this->tampada=true;
    }
    function destampar()
    {
        $this->tampada=false;
    }
    function rabiscar()
    {
        if ($this->tampada==true)
        {
            echo "Não pode rabiscar";
        }
        else
        {
            echo "Estou rabiscando...";
        }
    }
}
?>