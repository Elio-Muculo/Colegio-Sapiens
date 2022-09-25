<?php
session_start();
require_once '../config/crud.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];

    $senha = $_POST['senha'];

    $data = [
        $username = $_POST['nome']
    ];

    //consulta para verificar se o user existe na bd
    $sql = "SELECT * FROM Usuario WHERE username = ? ";


    if (countRow($sql, $data) == 1) {

        //pega os dados do usuario
        $dados = readOne($sql, $data);

        //senha vinda da bd
        $senhaUser = $dados['senha'];

        //compara a senha introduzida com a da bd
        if (password_verify($senha, $senhaUser)) {

            //verifica se a conta esta activa
            if ($dados['estado'] == 1) {

                if ($dados['perfil'] == 'professor') {
                    //caso o perfil seja professor
                    $_SESSION['user_id'] = $senhaUser;
                    $_SESSION['user_permission'] = $dados['perfil'];
                    header("location:../views/dashboardProfessor.php");
                    die();
                } else {
                    if ($dados['perfil'] == 'admin') {
                        //caso o perfil seja admin
                        $_SESSION['user_id'] = $senhaUser;
                        $_SESSION['user_permission'] = $dados['perfil'];
                        header("location:../views/admin.php");
                        die();
                    } else {
                        //caso o perfil seja encarregado
                        $_SESSION['user_id'] = $senhaUser;
                        $_SESSION['user_permission'] = $dados['perfil'];
                        header("location:../views/dashboardEncarregado.php");
                        die();
                    }
                }
            } else {
                $error[] = "<p>Conta actualmente desactivada!</p>";

                $_SESSION['error'] = $error;
                header("location:../index.php");
            }
        } else {
            $error[] = "<p>Usuario ou Senha incorrectos!</p>";

            $_SESSION['error'] = $error;
            header("location:../index.php");
        }
    } else {
        $error[] = "<p>Usuario ou Senha incorrectos!</p>";

        $_SESSION['error'] = $error;
        header("location:../index.php");
    }
}
