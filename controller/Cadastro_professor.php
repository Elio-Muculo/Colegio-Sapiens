<?php
session_start();

require_once '../config/crud.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $msg = [];

    //dados user do professor vindo dos inputs
    $password = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $user = [
        'username' => $_POST['nome'],
        'senha' => $password,
        'perfil' => 'professor',
        'estado' => 1,

    ];


    $sqlUser = "INSERT INTO usuario (username, senha, perfil, estado) VALUES (:username, :senha, :perfil, :estado)";

    if (insertAll($sqlUser, $user)) {

        //pega os dados user do professor recem registrado
        $id = readOne("SELECT codigo FROM usuario ORDER BY codigo DESC LIMIT 1");

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

        $msg = "<p>Usuario cadastrado com sucesso!</p>";
        $_SESSION['success'] = $msg;
        header('Location: ../views/professor.php');
        die();
    } else {

        $error = "<p>Os dados não foram inseridos</p>";
        $_SESSION['error'] = $error;
        header('Location: ../views/professor.php');
        die();
    }
} 
