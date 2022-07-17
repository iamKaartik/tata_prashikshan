<?php

    //development purpose
    //$host = '';
    //$db = 'prashikshan_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';


    //remote database
    $host = 'remotemysql.com';
    $db = 'BWzazGtOf9';
    $user = 'BWzazGtOf9';
    $pass = 'wsbY0bqzXl';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e) {
        echo "error";
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>
