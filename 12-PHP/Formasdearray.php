<!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8"/>
     <title>Document</title>
 </head>
 <body>
               <?php
               $lista_compras[1] = 'nandão';
               $lista_compras[2] = 'cabral';
               $lista_compras[3] = 'nandaonandao';
  
               //ou
               //$lista_compras = array(1 => 'Feijão', 2 => 'Arroz', 3 => 'batata', 4 => 'Ketchup');

               var_dump($lista_compras);
              echo '<br />';
              echo '<br />';
               print_r($lista_compras);
               echo '<br />';
               echo '<br />';
               print $lista_compras[3];



               ?>
 </body>
 </html>