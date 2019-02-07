<?php 

//is_array

$array = array('mac', 'linux', 'windows');
$retorno = is_array( 'mac',$array );

if( $retorno){
echo "verdadeiro";
}else{
echo "falso";
}




?>

<!--

//is_array - verifica se uma variável é um array
//is_array($array_verificar) | retorna: true ou false

//in_array - verifica se um valor existe em um array
//$array_verificar = array('mac','windows') |   in_array('mac',$array_verificar) | Retorna: "true" ou "false"

//array_keys - Retorna todas as chaves de um array
//$array = array(10=>'mac', 11=> 'windows');  |   array_keys($array) teremos: array(10,11)

// sort - Ordena um array
//$frutas = array(0=>'banana' , 1=>'amora', 2=>'carambola')| Resultado: array(0=>'amora',1=>'banana',2=>'carambola')

//asort - Ordena um array, mantendo índice/ valor
// $frutas = array(0=>'banana', 1=>'amora', 2=>'carambola') | Resultado = array(1=>'amora',0=>'banana', 2=>'carambola')  | Retorna: true ou false

// count - conta elementos de um array
//$array[0] = 'Notebook'
//$array[1] = 'celular'
//count($array) | Retorna: 2

//array_merge - funde um ou mais arrays
//explode - divide uma string baseado em um delimitador
//implode - junta elementos de um array em uma string

-->