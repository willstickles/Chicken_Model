<?php

/**
 * Created by PhpStorm.
 * User: Yasuru
 * Date: 7/23/2015
 * Time: 1:27 PM
 */

namespace Species;

interface AnimalInterface{

    // set and return the type of animal
    public function setType($type);
    public function getType();

    // set and return the name of the animal
    public function setName($name);
    public function getName();

    // set and return the age of the animal
    public function setAge($age);
    public function getAge();

    // set and return  the color of the animal.
    public function setColor($color);
    public function getColor();

    // what sound the animal makes.
    public function getSound();
    // what the animal does for fun.
    public function getEntertainment();

}

namespace Species;

class Chicken implements AnimalInterface{

    private $type;
    private $name;
    private $age;
    private $color;

    public function __construct( $name, $age ) {
        $this->setName($name); //set the animal name.
        $this->setAge($age); //set the animal age.
    }

    /**
     * @param $type
     * @return $this sets the type of animal to the class object
     */
    public function setType($type) {
        if ( $this->type !== null ){
            throw new \BadMethodCallException("The animal type is already set");
        }
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed Animal Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param $name
     * @return $this sets the type of animal to the class object
     */
    public function setName($name){
        if (strlen($name) < 2 || strlen($name) > 30) {
            throw new \InvalidArgumentException("The animal's name is invalid");
        }
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed Animal's name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param $age
     * @return $this Sets the animals aget to the Class object
     */
    public function setAge($age) {
        if(!is_int($age) || $age < 1 ) {
            throw new \InvalidArgumentException("The animal's age is invalid");
        }
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed Animal's age
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * @param $color
     * @return $this Sets the animal's color to the Class object
     */
    public function setColor($color){
        if (strlen($color) < 2 || strlen($color) > 20) {
            throw new \InvalidArgumentException("Not a valid color.");
        }
        $this->color = $color;
        return $this;
    }

    /**
     * @return mixed Animal's color
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @return string Returns the sound the animal makes.
     */
    public function getSound(){
        return "Cluck!";
    }

    /**
     * @return string Returns what the animal does for fun.
     */
    public function getEntertainment(){
        return "Cross the road!";
    }

}

$animal = new Chicken('Henny Penny', 10);
$animal->setType('chicken');
$animal->setColor('brown');

echo "<p>My name is " . $animal->getName() . ". I am a " . $animal->getAge() . " year old " . $animal->getColor() . " " . $animal->getType() . ".</p>";
echo "<p>The sound I make is " . $animal->getSound() . "</p>";
echo "<p>For fun I like to " . $animal->getEntertainment() . "</p>";

