<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=teste", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $conn2 = new PDO("mysql:host=localhost;dbname=atividade", "root", "");
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $conn3 = new PDO("mysql:host=localhost;dbname=atividade2", "root", "");
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function clean($dado){
    $dado = trim($dado);
    $dado = stripcslashes($dado);
    return htmlspecialchars($dado);
}