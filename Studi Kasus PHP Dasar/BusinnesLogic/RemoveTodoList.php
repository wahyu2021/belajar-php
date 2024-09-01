<?php

// Menghapus Todo di List
function removeTodoList(int $posisi)
{
    global $todoList;
    $number = sizeof($todoList);

    if($posisi <= 0 || $posisi > $number){
        echo "Anda salah memasukkan posisinya!!!" . PHP_EOL;
        return false;
    } 
    
    for($i = $posisi; $i < $number; $i++){
        $todoList[$i] = $todoList[$i+1];
     }

    unset($todoList[$number ]);
    
    return true;
}