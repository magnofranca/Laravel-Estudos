<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';

    try{
    $conn = new PDO('mysql:host=localhost; dbname=cardapio', $user, $pass );
    
    }catch(PDOException $e){
        echo 'erro ao se conectar'. $e->getMessage();
    }
    
?>