<?php

namespace App\Interaces;


class Page {

    /**
     * @var Displayable[];
     */
    private array $elements = [];

    public function add(Displayable $element) {
        $this->elements[] = $element;
    }

    public function display() {
        foreach ($this->elements as $item) {
            echo $item->toHTML();
        }
    }

}