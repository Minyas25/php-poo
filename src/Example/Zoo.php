<?php

namespace App\Example;

class Zoo {

    /**
     * @var Animal[]
     */
    private array $animals = [];

    private ?Person $guardian;

    public function add(Animal $animal) {
        if($animal instanceof Person) {
            $this->guardian = $animal;
        }else {
            $this->animals[] = $animal;
        }
    }

    public function feedAnimals() {
        if(!$this->guardian) {
            echo "<p>A guardian needed to feed the animals</p>";
            return;
        }
        echo "<p>Guardian {$this->guardian->getLastName()} is feeding the animals</p>";

        foreach ($this->animals as $item) {
            echo '<p>';
            $item->eat();
            echo '</p>';
        }
    }



}