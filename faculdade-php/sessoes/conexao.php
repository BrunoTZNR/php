<?php
    session_start();

    $host='localhost';
    $user='root';
    $pass='';
    $dbName='exemplo';
    
    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbName",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }