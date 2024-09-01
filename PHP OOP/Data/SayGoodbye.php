<?php

namespace Data\Traits;

trait SayGoodbye
{
    public function goodBye(?string $name): void{
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        } else{
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void{
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        } else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

class Person
{
    use SayHello, SayGoodbye;
}