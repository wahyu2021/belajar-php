<?php

require_once __DIR__ . "/../BusinnesLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

// Tampilan menambahkan todo ke list
function viewAddTodoList()
{
    while(true){
        echo "\n";
        echo "ADD TODOLIST" . PHP_EOL;
        $data = input("Masukkan Todo");
        echo "1. Add" . PHP_EOL;
        echo "2. Cancel" .PHP_EOL;
        $pilihan = input('Pilihan');
    
        if($pilihan == 1){
            global $todoList;
            echo "$data, berhasil ditambah" . PHP_EOL;
            addTodoList($data);
            break;
        } else if ($pilihan ==2){
            echo "Data tidak jadi ditambah" . PHP_EOL;
            break;
        } else{
            echo "Pilihan tidak ada!!!" . PHP_EOL;
        }
    }

}