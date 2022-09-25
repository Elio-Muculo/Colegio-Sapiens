<?php
session_start();

require_once '../config/crud.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $msg = [];

    //dados user do professor vindo dos inputs
    $user = [
        'username' => $_POST['nome'],
        'senha' => password_hash($_POST['senha'], PASSWORD_BCRYPT),
        'perfil' => 'professor',
        'estado' => 1,

    ];


    $sqlUser = "INSERT INTO usuario (username, senha, perfil, estado) VALUES (:username, :senha, :perfil, :estado)";

    if (insertAll($sqlUser, $user)) {

        //pega os dados user do professor recem registrado
        $id = readOne("SELECT codigo FROM Usuario ORDER BY codigo DESC LIMIT 1");

        //dados pessoais vindo dos inputs
        $dadosPessoais = [
            'nome' => $_POST['nome'],
            'apelido' => $_POST['apelido'],
            'numero_BI' => $_POST['numero_BI'],
            'experiencia' => $_POST['experiencia'],
            'formacao' => $_POST['formacao'],
            'quarterao' => $_POST['quarterao'],
            'genero' => $_POST['genero'],
            'userId' => $id['codigo'],
        ];

        $sqlDados = "INSERT INTO professor (nome, apelido, numero_BI, experiencia, formacao, quarteirao, genero, userId) VALUES (:nome, :apelido, :numero_BI, :experiencia, :formacao, :quarterao, :genero, :userId)";

        insertAll($sqlDados, $dadosPessoais);

        $msg[] = "<p>Usuario cadastrado com sucesso!</p>";
        $_SESSION['mensagem'] = $msg;
        header('Location: ../views/admin.php');
        die();
    } else {

        $error[] = "<p>Os dados não foram inseridos</p>";
        $_SESSION['error'] = $error;
        header('Location: ../views/admin.php');
        die();
    }
} 
