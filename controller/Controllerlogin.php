<?php
session_start();
require_once '../config/crud.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = "";

    $senha = $_POST['senha'];
    $data = [
        'username' => $_POST['nome'],
    ];

    echo "$ ";

    //consulta para verificar se o user existe na bd e retornar 1 ou mais caso existe
    $sql = "SELECT * FROM usuario WHERE username = :username";
    $usuarioExiste = countRow($sql, $data);
    if ($usuarioExiste > 0) {
        //pega os dados do usuario existente
        $dados = readOne($sql, $data);

        //senha vinda da bd

        $senhaUser = $dados['senha'];

        // verifica se a senha da Db e igual inserida e retorna a senha caso verdade
        // retorna null caso senhas incompativeis
        $senhaVerificada = password_verify($senha, $senhaUser) ? $senhaUser : null;

        //se retornar null da senha significa senhas diferentes
        // retornar para login com messagem de senhas erradas
        if ($senhaVerificada != null) {
            // chegou aqui porque a senha inserida e igual da base dados
            // verificar se existe um usuario com nome, senha e estado activo na base dados
            $sql = "SELECT * FROM usuario WHERE username = :username AND senha = :senha AND estado = :estado";
            $data = [
                'username' => $_POST['nome'],
                'senha' => $senhaUser,
                'estado' => 1
            ];

            // se retornar um 1 significa que existe um user activo com 
            // um determinado perfil 
            $contaVerificada = countRow($sql, $data);
            if ($contaVerificada == 1) {

                // pegar os dados desse usuario para poder redirecionar no lugar certo
                $dados = readOne($sql, $data);

                //verifica se o usuario acionou o checkbox para que o sistema lembre-se dele  
                if (isset($_POST['checar'])) {
                    
                    //cria data: um mes a mais que a data actual 
                    $date_expire = strtotime("+1 Month", time());

                    setcookie('username', $dados['username'], $date_expire,"/");
                }

                //caso o perfil seja professor
                if ($dados['perfil'] == 'professor') {
                    // sessao com o codigo(id) do professor
                    $_SESSION['user_id'] = $dados['codigo'];
                    $_SESSION['user_permission'] = $dados['perfil'];
                    header("location: ../views/dashboardProfessor.php");
                    die();
                } else {
                    if ($dados['perfil'] == 'admin') {
                        //caso o perfil seja admin
                        $_SESSION['user_id'] = $dados['codigo'];
                        $_SESSION['user_permission'] = $dados['perfil'];
                        header("location: ../views/admin.php");
                        die();
                    } else {
                        //caso o perfil seja encarregado
                        $_SESSION['user_id'] = $dados['codigo'];
                        $_SESSION['user_permission'] = $dados['perfil'];
                        header("location:../views/dashboardEncarregado.php");
                        die();
                    }
                }
            } else {
                $error = "<p>Conta actualmente desactivada!</p>";

                $_SESSION['error'] = $error;
                header("location:../index.php");
            }
        } else {
            $error = "<p>Usuario ou Senha incorrectos!</p>";

            $_SESSION['error'] = $error;
            header("location:../index.php");
        }
    } else {
        $error = "<p>Usuario ou Senha incorrectos!</p>";

        $_SESSION['error'] = $error;
        header("location:../index.php");
    }
}
