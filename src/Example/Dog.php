<?php

namespace App\Example;
/**
 * La classe Dog hérite de la classe Animal, cela signifie que le Dog pourra faire tout
 * ce que le Animal peut faire ainsi que ses propres méthodes.
 * L'héritage permet de généraliser des comportements entre différentes classes (souvent on
 * va plutôt "hériter de classes existantes", par exemple dans un framework ou une library, plutôt
 * que faire nous même des classes dont on hérite, mais ça peut arriver quand même)
 */
class Dog extends Animal {
    private string $breed;
    /**
	 * Ici dans le constructeur, on fait appel au constructeur du parent
	 */
    public function __construct(string $name, string $breed) {
        parent::__construct($name);
        $this->breed = $breed;
    }

    public function bark() {
        echo "bork bork bork";
    }

	/**
	 * Ici, on fait un override/redéfinition de méthode, on change la manière dont le
	 * eat se comporte spécifiquement pour la classe Dog.
	 * A l'intérieur on fait appelle à la méthode eat du parent, ce qui fait que lorsque
	 * le Dog mange, il va d'abord faire le eat de Animal avant de faire son propre comportement
	 * de manger (ça permet de rajouter des comportements sur une méthode parent tout en conservant
	 * les comportements définis dans le parent)
	 */
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