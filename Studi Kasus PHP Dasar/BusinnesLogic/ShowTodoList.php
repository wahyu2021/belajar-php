<?php

// Menampilkan Todo di List

function showTodoList ()
{
    global $todoList;
    echo "===================================" . PHP_EOL;
    echo "==            TODOLIST           ==" . PHP_EOL;
    echo "===================================" . PHP_EOL;
    foreach($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
    echo "===================================" . PHP_EOL;
}