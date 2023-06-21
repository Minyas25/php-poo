<?php

namespace App\Example;

class Animal {
    protected string $name;
    
    public function eat() {
        echo "{$this->name} is eating...";
    }

    public function breath() {
        echo "{$this->name} is breathing, another day";
    }
}