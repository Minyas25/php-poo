<?php

namespace App\Example;

class Dog extends Animal {
    private string $breed;
    
    public function __construct(string $name, string $breed) {
        $this->name = $name;
        $this->breed = $breed;
    }

    public function bark() {
        echo "bork bork bork";
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