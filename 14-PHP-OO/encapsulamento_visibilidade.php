<?php

class Veiculo{

/*
public - utilizando o var pe padrao ser publico
private - propriedades privadas não podem ser alterada fora da classe, só dentro
protected - não altera fora da classe, porem permiti ser alterado nas clases filhas!!!
*/

private $placa;
private $cor;
protected $tipo='Caminhoneiro';

public function setPlaca($parametro_placa){

        //validação da placa

    $this->placa = $parametro_placa;
}

public function getPlaca(){
    return $this->placa;
}

}

class Carro extends Veiculo{   //carro herdou os metodos e os atributos !
    public function exibirTipo(){
        echo $this->tipo;
    }
}


$carro = new Carro();
$carro->exibirTipo();

 /*
$veiculo = new Veiculo();
$veiculo->setPlaca('24928');
echo $veiculo->getPlaca();*/


?>