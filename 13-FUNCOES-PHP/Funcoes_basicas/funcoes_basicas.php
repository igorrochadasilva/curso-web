<?php 

$valor = 'Salim';                  
if(is_numeric($valor)){     //Verifica se a dada variável é numérica. Strings numéricas consistem de um sinal opcional, algum número de dígitos, opcional parte decimal e opcional parte exponencial. 
    echo "Variavel é numerica";
}



//empty(Determina se uma variável é considerada vazia. Uma variável é considerada vazia se não existir ou seu valor é igual FALSE. A função empty() não gera um aviso se a variável não existir.)
/* true -> '' 0 , '0' , false , null , array() 
false -> 

$valor='3';
if( empty($valor)){
    echo "Variavel vazia";
}*/




/*isset(O isset é necessário se você precisa saber se a variável foi previamente definida. )
$valor = 1;
if(isset ($valor) )
{
    echo 'Variavel iniciada';
}
*/


?>