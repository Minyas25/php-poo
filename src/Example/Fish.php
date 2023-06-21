<?php

namespace App\Example;

class Fish extends Animal {
    public bool $inWater = true;

    public function __construct() {
        parent::__construct("Poisson");
    }

    public function swim() {
        if($this->inWater){
            echo "{$this->name} is swimming";
        } else {
            echo "{$this->name} cannot swim...";
        }
    }

    public function breath(){
        if($this->inWater) {
            parent::breath();
        } else {
            echo "The fish is not well";
        }
    }
}