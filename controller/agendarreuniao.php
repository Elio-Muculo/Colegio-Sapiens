<?php 
session_start();
require_once '../config/crud.php';

$professor = readOne("SELECT * FROM professor WHERE userId = :id", ['id' => $_SESSION['user_id']]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    /**
     * dados da reuniao
    */
    $dadosReuniao = [
        'tipo' => $_POST['tipo'], 
        'assunto' => $_POST['assunto'],
        'data' => $_POST['data'],
        'professor_cod' => $professor['codigo'],
        'encarregado_cod' => $_POST['encarregado_cod']
    ];
    
    $inserted = insertAll("INSERT INTO reuniao (tipo, assunto, data, professor_cod, encarregado_cod) VALUES (:tipo, :assunto, :data, :professor_cod, :encarregado_cod)", $dadosReuniao);
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
    

