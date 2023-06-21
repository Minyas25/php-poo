<?php
use App\Example\Dog;

require '../vendor/autoload.php';


$dog = new Dog("Fido", "Corgi");


$dog->bark();
$dog->eat();