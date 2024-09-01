<?php

require_once __DIR__ . "/GetConnection.php";

$pdo = getConnection();
try{

$sql = <<<SQL
    CREATE TABLE admin(
        username VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        PRIMARY KEY (username)
    )ENGINE = InnoDB;
SQL;

$pdo->exec($sql);
echo "Tabel berhasil dibuat";
}catch(PDOException $e){
    echo "Tabel gagal dibuat: " . $e->getMessage() . PHP_EOL;
}

$pdo = null;