<?php
use App\Example\Dog;
use App\Example\Fish;
use App\Example\Person;
use App\Example\Zoo;

require '../vendor/autoload.php';


$dog = new Dog("Fido", "Corgi");
$fish = new Fish();

// $dog->eat();

$person1 = new Person("Bobson", "Bobby");
$person2 = new Person("Achour", "Amina");

$zoo = new Zoo();
$zoo->add($dog);
$zoo->add($fish);
$zoo->add($person1);
$zoo->add($person2);

$zoo->feedAnimals();

var_dump($zoo);

// $person1->speak($person2);


// $person1->eat();
// $person2->breath();