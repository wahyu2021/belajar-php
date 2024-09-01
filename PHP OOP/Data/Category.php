<?php

namespace Data;

class Category
{
    private string $name;
    private bool $expensive;

    public function setName(string $name): void
    {
        if(trim($name) != ""){
            $this->name = $name;
        }
    }

    public function isExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getExpensive(): bool
    {
        return $this->expensive;
    }

    
}