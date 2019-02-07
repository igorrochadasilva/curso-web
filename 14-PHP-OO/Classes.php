<?php

class Pessoa{
// atributos
var $nome;

//métodos
function setNome($nome_definido){
    $this->nome = $nome_definido;
}

function getNome(){
   return $this->nome;
}
}

$pessoa = new Pessoa();

$pessoa->setNome('Salim');

echo $pessoa->getNome();
//getters(recupera) e setters(envia)
?>


<!--

this - é uma pseudo variavel utilizada para acessar metodos e atributos dentro de um objeto(classe)

-->