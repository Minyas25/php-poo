<?php

namespace App\Example;

class Person extends Animal {
    private string $lastName;

    public function __construct(string $lastName, string $name) {
        parent::__construct($name);
        $this->lastName = $lastName;
    }

    public function speak(Person $person) {
        echo "Hello {$person->name}, it's me {$this->name} {$this->lastName}";
    }
     

	/**
	 * @return string
	 */
	public function getLastName(): string {
		return $this->lastName;
	}
	
	/**
	 * @param string $lastName 
	 * @return self
	 */
	public function setLastName(string $lastName): self {
		$this->lastName = $lastName;
		return $this;
	}
}