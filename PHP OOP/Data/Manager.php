<?php

class Manager{
    protected string $name;
    protected string $title;

    public function sayHello(string $name): void{
        echo "Hello $name, my name is Manager $this->name" . PHP_EOL;
    }

    public function __construct(string $name, string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }

    public function __destruct(){
        echo "Object has been destroyed" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    public function sayHello(string $name): void{
        echo "Hello $name, my name is VP $this->name" . PHP_EOL;
    }
    public function __construct(string $name){
        parent::__construct($name, "VP");
    }
}