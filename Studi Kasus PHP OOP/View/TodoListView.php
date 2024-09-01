<?php

namespace View{

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView{
        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService){
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void{
            while(true){
                echo "\n";
                echo "=====================================\n";
                echo "==       Todolist Application      ==\n";
                echo "=====================================\n";
                echo "List:\n";
                $this->todoListService->showTodoList();
                echo "=====================================\n";
                echo "1. Tambah Todolist\n";
                echo "2. Hapus Todolist\n";
                echo "x. exit\n";
                $pilihan = InputHelper::input("Pilih |[1]|[2]|[x]|");
        
                if($pilihan == 1){
                    $this->addTodoList();
                } elseif($pilihan == 2){
                    $this->removeTodoList();
                } elseif($pilihan == "x" || $pilihan == "X"){
                    break;
                } else{
                    echo "Pilihan tidak valid\n";
                }
        
            }
            echo "Sampai Jumpa Lagi\n";
        }

        function addTodoList(): void{
            echo "\n";
            echo "=====================================\n";
            echo "==          Tambah Todolist        ==\n";
            echo "=====================================\n";
            echo "Masukkan [x] jika ingin membatalkan\n";
            $data = InputHelper::input("Tambahkan");

            if($data == "x" || $data == "X"){
                echo "Batal menambahkan data\n";
            } else{
                $this->todoListService->addTodoList($data);
            }
        }

        function removeTodoList(): void{
            echo "\n";
            echo "=====================================\n";
            echo "==           Hapus Todolist        ==\n";
            echo "=====================================\n";
            echo "Masukkan [x] jika ingin membatalkan\n";
            $data = InputHelper::input("Masukkan nomor urut data");

            if($data == "x" || $data == "X"){
                echo "Batal menghapus data\n";
            } else{
                $this->todoListService->removeTodoList($data);
            }
        }
    }
}