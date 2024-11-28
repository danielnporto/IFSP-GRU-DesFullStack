<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $cargo = mysqli_real_escape_string($conexao, trim($_POST['cargo']));
    $equipe = mysqli_real_escape_string($conexao, trim($_POST['equipe']));

    $sql = "INSERT INTO membro (nomeMembro, cargo, dataNasc) 
        VALUES ('$nome','$cargo', '$data_nascimento')";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usúario criado com sucesso';
        header('Location: ../pages/page3.php');
        exit;
    }else{
        $_SESSION['mensagem'] = 'Usúario não foi criado';
        header('Location: ../pages/page3.php');
        exit;   
    }

}

?>