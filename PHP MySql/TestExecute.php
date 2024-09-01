<?php

require_once __DIR__ . "/GetConnection.php";

$pdo = getConnection();
try{
$sql = <<<SQL
    INSERT INTO admin(username, password) VALUES("Admin", "Admin123");
SQL;
$pdo->exec($sql);
echo "Data berhasil disimpan";
}catch(PDOException $e){
    echo "Data tidak berhasil disimpan: " . $e->getMessage() . PHP_EOL;
}

$pdo = null;