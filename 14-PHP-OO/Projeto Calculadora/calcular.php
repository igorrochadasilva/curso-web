<?php

require_once 'classes/calculadora.php';

 

$numero1 = $_POST['numero1']; //recuperando oq a pessoa digitou
$numero2 = $_POST['numero2'];
echo $operacao = $_POST['operacao'];

$calculadora = new Calculadora();

//Setar valores

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

//operacoes
	

switch ($operacao) {
    case 'somar':
        $calculadora->somar();
        break;

    case 'subtrair':
        $calculadora->subtrair();
        break;

    case 'multiplicar':
        $calculadora->multiplicar();
        break;

    case 'dividir':
        $calculadora->dividir();
        break;
    
}

echo $calculadora->getTotal();

?>