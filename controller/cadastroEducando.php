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
        $_SESSION['success'] = "<p>Os dados foram inseridos com sucesso.</p>";
        header('Location: ../views/cadastroEducando.php');
    } else {
        $_SESSION['error'] = "<p>Os dados não foram inseridos</p>";
        header('Location: ../views/cadastroEducando.php');
        die();
    }
}
    

