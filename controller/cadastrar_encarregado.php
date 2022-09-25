<?php 
session_start();
require_once __DIR__ . '/config/crud.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    /**
     * dados do encarregado para criar a conta
     */
    $dadosEncarregadoUser = [
        'username' => $_POST['username'],
        'senha' => $_POST['senha'],
        'perfil' => "encarregado",
        'estado' => 1,
    ];

    /**
     * dados do encarregado vindo do input's
     */
    $dadosEncarregado = [
        'nome' => $numero_conta, 
        'apelido' => $nome, 
        'telefone' => $pin, 
        'bairro' => 1, 
        'quarteirao' => date("Y-m-d H:i:s"),
        'email' => date("Y-m-d H:i:s"),
        'genero' => date("Y-m-d H:i:s"),
        'data_nascimento' = ,
        'user_id' => date("Y-m-d H:i:s")
    ];

    $sql = "INSERT INTO Usuario (username, senha, perfil, estado) VALUES (:username, :senha, :perfil, :estado)";
    $inserted = insertAll($sql, $dadosEncarregadoUser);

    if ($inserted == 1) {
        $id = readOne("SELECT id FROM usuario ORDER BY id DESC LIMIT 1");

        insertAll("INSERT INTO encarregado (nome, apelido, telefone, bairro, quarteirao, email, genero, data_nascimento, user_id) VALUES (:nome, :apelido, :telefone, :bairro, :quarteirao, :email, :genero, :data_nascimento, :user_id)", $dadosEncarregado);
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
    

