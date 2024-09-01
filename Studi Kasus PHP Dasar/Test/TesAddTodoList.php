<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinnesLogic/AddTodoList.php";

addTodoList("Belajar");
addTodoList("Ngopi");
addTodoList("Jalan");

var_dump($todoList);