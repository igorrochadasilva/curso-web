<?php 

require_once("funcoes_valida_login.php");
$login_usuario = $_POST['login'];   //recebe oque foi digitado no input
$senha_usuario = $_POST['senha'];

$usuario_validado = valida_login($login_usuario, $senha_usuario); //passa os parametros que foram guarados nas variaveis usuario nome e senha para a função valida login 

if($usuario_validado){  //if deu true no usuario_validado
    echo "Acesso liberado";
} else{  // if not entao
    echo "Acesso negado";
}


?>
