<?php 

/**
 * Instancia conexao com Mysql Database
 */

 define("HOST", "localhost");
 define("DBNAME", "colegio_sapiens");
 define("USER", "root");
 define("PASSWORD", "");

try {
    $conexao = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
} catch (PDOException $th) {
    echo $th->getMessage();    
}

