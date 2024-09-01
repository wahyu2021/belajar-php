<?php

namespace Data\One{
    class Conflict{
        public function __construct(){
            echo "Object from Data\One has been created" . PHP_EOL;
        }
    
        public function __destruct(){
            echo "Object from Data\One has been destroyed" . PHP_EOL;
        }
    }
}

namespace Data\Two{
    class Conflict{
        public function __construct(){
            echo "Object from Data\Two has been created" . PHP_EOL;
        }
    
        public function __destruct(){
            echo "Object from Data\Two has been destroyed" . PHP_EOL;
        }
    }
}