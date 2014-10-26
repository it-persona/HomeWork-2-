<?php

require_once "autoload.php";

use Classes\DoggyClass;
use Classes\HorseClass;

echo "<h1>Task-2</h1>";

$animalDog = new DoggyClass();

// Initial dog animal
$animalDog->setAnimalEyesColor("Red");
$animalDog->setAnimalSpecies("England dog");
$tail = $animalDog->setAnimalTail(90);
$weight = $animalDog->setAnimalWeight(80);
$animalDog->setAnimalWool("Short");
$animalSay = $animalDog->animalSay("woof-woof!" . "<br>");

// Display object info
echo $animalDog->getAnimal() . " sey <b>$animalSay</b><br>";
echo $animalDog->checkAnimal($tail, $weight);
echo "<pre>";
echo "<b>Show object info: </b>";
print_r($animalDog);

echo "<br><hr>";

$animalHorse = new HorseClass();

// Initial horse animal
$animalHorse->setAnimalEyesColor("Brown");
$animalHorse->setAnimalSpecies("Mustang");
$tail = $animalHorse->setAnimalTail(78);
$weight = $animalHorse->setAnimalWeight(120);
$animalHorse->setAnimalWool("Black");
$animalSay = $animalHorse->animalSay("Igo-go!" . "<br>");

// Display object info
echo "<br>" . $animalHorse->getAnimal() . " sey <b>$animalSay</b><br>";
echo $animalHorse->checkAnimal($tail, $weight);
echo "<pre>";
echo "<b>Show object info: </b>";
print_r($animalHorse);
