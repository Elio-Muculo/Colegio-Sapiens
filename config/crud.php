<?php 
require_once __DIR__ . '/db.php';


/**
 * 
 * Crud para todos os ficheiros que precisarem executar as operações 
 * na base de dados
 * 
 * @author Dev.Elliot
 *  
 */



/**
 * Ler os dados de um unico usuario.
 * 
 * @param string $sql 
 * consulta da busca a ser feita com named parameters
 * 
 * @param array $id  
 * id para filtrar a consulta e named param
 * 
 *@return mixed || false $array 
 * retorna os dados de uma linha correspondente ao id falso na falha
 */
function readOne($sql, $id = []) {
    global $conexao;

    $stmt = $conexao->prepare($sql);
    $stmt->execute($id);

    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}


/**
 * Ler todos os dados.
 * 
 * @param string $sql 
 * consulta da busca a ser feita com named parameters
 * 
 * @param array $data  
 * dados a serem executados depois de fazer prepared statements
 * 
 *@return mixed || false $array 
 * retorna os dados ou false no caso de falha.
 */
function readAll($sql, $data = []) {
    global $conexao;

    $stmt = $conexao->prepare($sql);
    $stmt->execute($data);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


/**
 * Conta o numero de linhas afectadas por uma consulta
 * 
 * @param string $sql 
 * consulta da busca a ser feita com named parameters
 * 
 * @param array $data  
 * dados a serem executados depois de fazer prepared statements
 * 
 *@return int
 * retorna o numero de linhas afectadas
 */
function countRow($sql, $data = []) {
    global $conexao;

    $stmt = $conexao->prepare($sql);
    $stmt->execute($data);

    return $stmt->rowCount();
}



/**
 * mudar o estado de uma coluna com base no update
 * 
 * @param string $sql 
 * consulta da busca a ser feita com named parameters
 * 
 * @param array $data  
 * dados a serem executados depois de fazer prepared statements
 * 
 *@return int
 * retorna 1 em caso da mudança for bem sucedida.
 */
function changeUserState($sql, $data = []) {
    global $conexao;

    $stmt = $conexao->prepare($sql);
    $stmt->execute($data);

    return $stmt->rowCount();
}



/**
 * Inserir todos dados na bd
 * 
 * @param string $sql 
 * query a ser feita executada
 * 
 * @param mixed $dados
 * dados a serem inseridos.
 * 
 *@return int 
 * retorna 1 no caso de sucesso e 0 caso contrario.
 */
function insertAll($sql, $dados) {
    global $conexao;

    $stmt = $conexao->prepare($sql);

    $stmt->execute($dados);

    return $stmt->rowCount();
}


/**
 *  o valor de saldo apos uma operação
 * 
 * @param string $sql 
 * query a ser feita executada
 * 
 * @param mixed $dados
 * dados a serem executados 
 * 
 *@return array
 * retorna 1 no caso de sucesso e 0 caso contrario.
 */
function saldo($sql, $dados) {
    global $conexao;

    $stmt = $conexao->prepare($sql);

    $stmt->execute($dados);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


/**
 * Atualizar o valor de saldo apos uma operação
 * 
 * @param string $sql 
 * query a ser feita executada
 * 
 * @param mixed $dados
 * dados a serem executados 
 * 
 *@return int 
 * retorna 1 no caso de sucesso e 0 caso contrario.
 */
function levantar($sql, $dados) {
    global $conexao;

    $stmt = $conexao->prepare($sql);
    $stmt->execute($dados);

    return $stmt->rowCount();
}

