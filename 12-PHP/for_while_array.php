<?php

$noticias = array();

$noticias[1]['titulo'] = 'título da notícia 1';
$noticias[1]['conteudo'] = 'conteúdo dessa notícia 1';

$noticias[2]['titulo'] = 'título da notícia 2';
$noticias[2]['conteudo'] = 'conteúdo dessa notícia 2';

$noticias[3]['titulo'] = 'título da notícia 3';
$noticias[3]['conteudo'] = 'conteúdo dessa notícia 3';

//var_dump($noticias)
echo 'Laço de repetição For';

for($idx = 1; $idx <= 4; $idx = $idx + 1){
echo $noticias[$idx]['titulo'];
echo '<br />';
echo $noticias[$idx]['conteudo'];
echo '<br />';

}

echo 'Laço de repetição do while';

$idx=1;

do{

    echo $noticias[$idx]['titulo'];
    echo '<br />';
    echo $noticias[$idx]['conteudo'];
    echo '<br />';

$idx = $idx + 1;
}while($idx <=4);


echo 'Laço de repetição while';

while($idx <= 3){

   echo $noticias[1]['titulo'];
   echo '<br />';
   echo $noticias[$idx]['conteudo'];
   echo '<br />';

   $idx = $idx + 1;

}




?>