<?php

require_once __DIR__ . "/../BusinnesLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BusinnesLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinnesLogic/ShowTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";


addTodoList("Belajar");
addTodoList("Ngopi");
addTodoList("Jalan");
showTodoList();
var_dump($todoList);
removeTodoList(3);
var_dump($todoList);
showTodoList();