

<?php

function exibir_boas_funcoes($nome){
    echo "Curso de php é aqui, ".$nome;
}

function calcular_soma($numero1,$numero2){
    return $numero1+$numero2;
}

exibir_boas_funcoes('Salim');
echo '<br />';
echo calcular_soma(10,10);

?>