<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'os_teste';

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname;",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "fudeo -> ERROR: ".$e->getMessage();
    }