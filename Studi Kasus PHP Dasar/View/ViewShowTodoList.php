<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinnesLogic/ShowTodoList.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";

// tampilan menampilkan data todo pada list
function viewShowTodoList()
{
    while(true) 
    {
        showTodoList();
        echo "==              MENU             ==". PHP_EOL;
        echo "===================================" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;
    
        $pilihan = input("Pilih");
    
        if($pilihan == 1){
            viewAddTodoList();
            echo "\n";
        } else if($pilihan == 2){
            viewRemoveTodoList();
            echo "\n";
        } else if($pilihan == 'x'){
            break;
        } else{
            echo "Pilihan tidak ada!!!" . PHP_EOL;
            echo "\n";
        }
    }

    echo "Sampai jumpa lagi";

}