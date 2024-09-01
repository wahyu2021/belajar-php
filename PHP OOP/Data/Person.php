<?php

class Person{
    const AUTHOR = "Andini";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(?string $name):void {
        if(is_null($name)){
            echo "Hello {$this->name}" . PHP_EOL; 
        } else{
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info(): void{
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    // construction
    public function __construct(string $name, ?string $address){
        $this->address = $address;
        $this->name = $name;
    }

    // destruction
    public function __destruct(){
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}