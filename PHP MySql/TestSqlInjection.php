<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = $connection->quote("admin'; #");
$password = $connection->quote("admin");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";
$result = $connection->query($sql);

$success = false;
$find_user = null;
foreach($result as $row){
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if($success){
    echo "Success Login : " . $find_user . PHP_EOL;
} else{
    echo "Failed Login" . PHP_EOL;
}

$connection = null;