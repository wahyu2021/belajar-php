<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[1] = new Todolist("Belajar PHP");
    $todoListRepository->todolist[2] = new Todolist("Belajar PHP");
    $todoListRepository->todolist[3] = new Todolist("Belajar PHP");


    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Compose");
    $todoListService->showTodoList();
}

testAddTodoList();

function testRemoveTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Compose");
    $todoListService->showTodoList();
    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();
}

testRemoveTodoList();