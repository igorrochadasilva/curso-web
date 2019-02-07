<?php 
/* $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : ''; // VALIDAÇÃO SE EXISTE 
$total_string_cpf = strlen( $cpf );

if($total_string_cpf != 11 && $cpf != ''){
    echo "CPF invalido";
} 
---------------------------------------------------
$texto = "12.40";
$cpf = str_replace(".", ",", $texto);
$cpf = str_replace(".", ",", $texto);

echo $cpf;*/

//strtolower converte todo o alfabeto para letras minusculas
//strtoupper converte todo o alfabeto para letras maiusculas
//ucfirst = upper case first  deixa maiuscula apenas a ṕrimeira letra
//strlen conta o numero de caracteres
//str altera a string
//substr
$texto ="Entenda porque seu smartphone esquenta tanto";

$noticia = substr($texto, 0, 10);
echo $noticia." ...";

?>




<!--
<form method="post" action="">

    <input type="text" name="cpf">
    <label> CPF:
    <input type="submit" name="cadastrar">
    </label>
</form>
