<?php 
session_start();
require_once '../config/crud.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    /**
     * dados do enducando vindo do input's
    */
    $dadosEnducando = [
        'nome' => $_POST['nome'], 
        'apelido' => $_POST['apelido'], 
        'encarregado_id' => $_POST['telefone'], 
        'data_nascimento' => $_POST['data_nascimento'],
        'genero' => $_POST['data_nascimento'],
        'bairro' => $_POST['bairro'], 
        'quarteirao' => $_POST['quarteirao'],
        'turma_id' => $id['codigo']
    ];
    
    $inserted = insertAll("INSERT INTO enducando (nome, apelido, encarregado_id, data_nascimento, genero, bairro, quarteirao, turma_id) VALUES (:nome, :apelido, :encarregado_id, :data_nascimento, :genero, :bairro, :quarteirao, :turma_id)", $dadosEnducando);
    die($inserted);
    if ($inserted == 1) {
        die("dado inserido com sucesso");
        $_SESSION['conta'] = $numero_conta;
        header('Location: ../views/index.php');
        die("dado inserido com sucesso");
    } else {
        $error[] = "<p>Os dados não foram inseridos</p>";
        $_SESSION['error'] = $error;
        header('Location: ../views/formularioEncarregado');
        die();
    }
}
    

