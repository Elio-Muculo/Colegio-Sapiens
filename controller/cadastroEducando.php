<?php 
session_start();
require_once '../config/crud.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    /**
     * dados do enducando vindo do input's
    */
    $dadosEducando = [
        'nome' => $_POST['nome'], 
        'apelido' => $_POST['apelido'], 
        'encarregado_id' => $_POST['encarregado_id'], 
        'data_nascimento' => $_POST['data_nascimento'],
        'genero' => $_POST['genero'],
        'bairro' => $_POST['bairro'], 
        'quarteirao' => $_POST['quarteirao'],
        'turma_id' => $_POST['turma_id']
    ];
    
    $inserted = insertAll("INSERT INTO educando (nome, apelido, encarregado_id, data_nascimento, genero, bairro, quarteirao, turma_id) VALUES (:nome, :apelido, :encarregado_id, :data_nascimento, :genero, :bairro, :quarteirao, :turma_id)", $dadosEducando);
    if ($inserted == 1) {
        die("dado inserido com sucesso");
        header('Location: ../views/admin.php');
        die("dado inserido com sucesso");
    } else {
        $error[] = "<p>Os dados não foram inseridos</p>";
        $_SESSION['error'] = $error;
        header('Location: ../views/cadastroEducando.php');
        die();
    }
}
    
