<?php
    require('classes/Validacao.php');
    require('classes/ValidaNomeUsuario.php');
    require('classes/ValidaEmail.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validaNomeUsuario = new ValidaNomeUsuario($nome);
    $validaEmailUsuario = new ValidaEmail($email);
    
    var_dump($validaNomeUsuario->validar());
    var_dump($validaEmailUsuario->validaEmail());

?>
