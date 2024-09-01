<?php

require_once __DIR__ . "/../BusinnesLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

// tampilan menghapus todo dari list
function viewRemoveTodoList()
{
    while(true){
        echo "\n";
        echo "REMOVE TODOLIST" . PHP_EOL;
        $data = (int)input("Masukkan Nomor Urut");
        echo "1. Remove" . PHP_EOL;
        echo "2. Cancel" .PHP_EOL;
        $pilihan = input('Pilihan');
    
        if($pilihan == 1){
            global $todoList;
            echo "Todo ke-$data $todoList[$data], berhasil dihapus" . PHP_EOL;
            removeTodoList($data);
            break;
        } else if ($pilihan ==2){
            echo "Data tidak jadi dihapus" . PHP_EOL;
            break;
        } else{
            echo "Pilihan tidak ada!!!" . PHP_EOL;
        }
    }
}