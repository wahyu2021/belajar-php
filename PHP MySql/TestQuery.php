<?php

require_once __DIR__ . "/GetConnection.php";

$pdo = getConnection();
try{
    $sql = "SELECT * FROM customers";
    $result = $pdo->query($sql);
    echo "Data berhasil diambil" . PHP_EOL;
}catch(PDOException $e){
    echo "Data tidak berhasil diambil: " . $e->getMessage() . PHP_EOL;
}

foreach($result as $row){
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "$id. $name [$email]" . PHP_EOL;
}

$pdo = null;