<?php

//classe mae ou super classe
class Felino{



var $mamifero = 'sim';


function correr(){
    echo 'correr como felino';
}
}

//classe filha ou subclasse
class Chita extends Felino{
//polimorfismo é sobrescrever o metodo
 function correr(){
echo'correr como chita 100KM/h';
}

}

$chita = new Chita();

echo $chita->mamifero . '<br>';
$chita->correr();


?>


<!--

this - é uma pseudo variavel utilizada para acessar metodos e atributos dentro de um objeto(classe)

-->