<?php

namespace Repository{
    use Entity\Todolist;
    interface TodoListRepository{
        // fungsi untuk mengelola data
        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository{

        public array $todolist = array();

        function save(Todolist $todolist): void{
            $number = sizeof($this->todolist) + 1;

            $this->todolist[$number] = $todolist;
        }

        function remove(int $number): bool{
            if($number <= 0 || $number > sizeof($this->todolist)){
                echo "Anda salah memasukkan posisinya!!!" . PHP_EOL;
                return false;
            } 
            
            for($i = $number; $i < sizeof($this->todolist); $i++){
                $this->todolist[$i] = $this->todolist[$i+1];
            }

            unset($this->todolist[sizeof($this->todolist)]);
            
            return true;
        }

        function findAll(): array{
            return $this->todolist;
        }
    }
}