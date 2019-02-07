<?php 

$produtos[1] = 'sofa';
$produtos[2] = 'fogão';
$produtos[3] = 'cadeira';
$produtos[4] = 'mesa';
$produtos[5] = 'tv';

//var_dump($produtos);

foreach($produtos as $produto){
   echo $produto. '<br />';

    if($produto == 'mesa'){
        echo 'compre e ganhe uma casa <br />';
    }

}

//O construtor foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objetos, e emitirá um erro ao tentar usá-lo em uma variável com um tipo de dado diferente ou em uma variável não inicializada. Possui duas sintaxes:



?>