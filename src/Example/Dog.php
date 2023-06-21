<?php

namespace App\Example;

class Dog extends Animal {
    private string $breed;
    
    public function __construct(string $name, string $breed) {
        parent::__construct($name);
        $this->breed = $breed;
    }

    public function bark() {
        echo "bork bork bork";
    }

	public function eat() {
		parent::eat();
		echo "Dog is quickly eating and throw up";
	}

	/**
	 * @return string
	 */
	public function getBreed(): string {
		return $this->breed;
	}
	
	/**
	 * @param string $breed 
	 * @return self
	 */
	public function setBreed(string $breed): self {
		$this->breed = $breed;
		return $this;
	}
}