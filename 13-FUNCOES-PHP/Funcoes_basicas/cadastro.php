<?php 

if(isset($_POST['nome']) && empty($_POST['nome'])){
    echo 'Prencha o nome completo';
    echo '<br />';
}

if(isset($_POST['cpf']) && empty($_POST['cpf']) ){
    echo 'Prencha o cpf por completo';
    echo '<br />';
}

if(isset($_POST['cpf']) && !is_numeric($_POST['cpf']) ){
    echo 'Apenas numeros no CPF';
}

?>



<form method="post" action="">
    
    <label>
    Nome Completo*:
    <input type="text" name="nome">
    </label>

   
    <label>
    CPF*:
    <input type="text" name="cpf">
    </label>

    <input type="submit" value="cadastrar">

</form>
