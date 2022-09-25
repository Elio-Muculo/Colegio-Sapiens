<?php 
session_start();
require_once '../config/crud.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    /**
     * dados do encarregado para criar a conta
     */
    $dadosEncarregadoUser = [
        'username' => $_POST['nome'],
        'senha' => password_hash("123456", PASSWORD_BCRYPT),
        'perfil' => "encarregado",
        'estado' => 1,
    ];


    $sql = "INSERT INTO Usuario (username, senha, perfil, estado) VALUES (:username, :senha, :perfil, :estado)";
    $inserted = insertAll($sql, $dadosEncarregadoUser);
    if ($inserted == 1) {
        // pegamos o id do usuario que foi adicionado em cima. 
        // ['codigo' => 1]
        $id = readOne("SELECT codigo FROM usuario ORDER BY codigo DESC LIMIT 1");

        /**
         * dados do encarregado vindo do input's
        */
        $dadosEncarregado = [
            'nome' => $_POST['nome'], 
            'apelido' => $_POST['apelido'], 
            'telefone' => $_POST['telefone'], 
            'bairro' => $_POST['bairro'], 
            'quarteirao' => $_POST['quarteirao'],
            'email' => $_POST['email'],
            'genero' => $_POST['genero'],
            'data_nascimento' => $_POST['data_nascimento'],
            'user_id' => $id['codigo']
        ];
        
        insertAll("INSERT INTO encarregado (nome, apelido, telefone, bairro, quarteirao, email, genero, data_nascimento, user_id) VALUES (:nome, :apelido, :telefone, :bairro, :quarteirao, :email, :genero, :data_nascimento, :user_id)", $dadosEncarregado);
        die();
        $_SESSION['conta'] = $numero_conta;
        header('Location: ../views/index.php');
        die();
    } else {
        $error[] = "<p>Os dados não foram inseridos</p>";
        $_SESSION['error'] = $error;
        header('Location: ../Registrar.php');
        die();
    }
}
    

