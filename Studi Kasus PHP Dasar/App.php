<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinnesLogic/AddTodoList.php";
require_once __DIR__ . "/BusinnesLogic/RemoveTodoList.php";
require_once __DIR__ . "/BusinnesLogic/ShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";


echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();