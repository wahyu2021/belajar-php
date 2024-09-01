<?php

namespace Service{

    use Entity\Todolist;
    use Repository\TodoListRepository;

    interface TodoListService{
        // businnes logic
        // Menambahkan todo ke list
        function addTodoList(string $todo): void;

        // Menghapus todo ke list
        function removeTodoList(int $number): void;

        // Menampilkan todo
        function showTodoList(): void;

    }

    class TodoListServiceImpl implements TodoListService{
        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository){
            $this->todoListRepository = $todoListRepository;
        }

        // Menambahkan todo ke list
        function addTodoList(string $todo): void{
            $todoList = new Todolist($todo);
            $this->todoListRepository->save($todoList);
            echo "Success" . PHP_EOL;
        } 

        // Menghapus todo ke list
        function removeTodoList(int $number): void{
            if($this->todoListRepository->remove($number)){
                echo "Remove Success" . PHP_EOL;
            } else{
                echo "Remove Failed" . PHP_EOL;
            }
            
        }

        // Menampilkan todo
        function showTodoList(): void{
            $todoList = $this->todoListRepository->findAll();

            foreach($todoList as $number => $value){
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }
    }
}