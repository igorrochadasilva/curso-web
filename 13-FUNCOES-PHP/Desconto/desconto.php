
<?php

require_once("funcoes_desconto.php"); //chama outro arquivo php

$valor_total = 800;
$desconto = 10;

$valor_com_desconto= calcula_desconto($valor_total, $desconto) //envia os parametros para a função calcula_desconto

?>

Valor Total: R$ <?php echo $valor_total ?> <br>
Valor Desconto: R$ <?php echo $desconto ?>% <br>
Valor total com desconto: R$ <?php echo $valor_com_desconto ?>
