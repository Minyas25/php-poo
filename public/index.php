<?php
use App\Example\Dog;
use App\Example\Person;

require '../vendor/autoload.php';


$dog = new Dog("Fido", "Corgi");

$dog->eat();

$person1 = new Person("Bobson", "Bobby");
$person2 = new Person("Achour", "Amina");

$person1->speak($person2);


$person1->eat();
$person2->breath();