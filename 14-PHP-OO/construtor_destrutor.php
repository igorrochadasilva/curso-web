<?php

class Pessoa{

    private $nome;
 
    public function correr(){
            echo $this->nome . " esta correndo <br>";
    }
 

    function __construct($parametro_nome){
        echo "construtor iniciado <br>";
        $this->nome = $parametro_nome;
    }

    function __destruct(){
        echo "objeto removido <br>";
    }
}

$pessoa = new Pessoa('Salim');
$pessoa->correr();

?>

