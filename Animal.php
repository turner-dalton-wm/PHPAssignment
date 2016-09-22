<?php

//final class Animal {
//Child classes Bull and Cow methods will not work because the final keyboard stops overriding
abstract class Animal {

    protected $name;
    protected $age;
    protected $health;

    public static $maxAge = 100;

    public function __construct($name, $age, $health) {
        $this->name = $name;
        $this->age = $age;
        $this->health = $health;
    }

    /*public function eat() {
        $this->health += 2;
    }*/

    public abstract function eat();

    public function sleep() {
        $this->health += 1;
        $this->age += 1;
        if($this->age > self::$maxAge) echo '<br>Animal has reached its max age.<br>';
    }

    public function iterate() {
        foreach($this as $key => $value) {
            print "$key => $value<br>";
        }
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    protected function setAge($age) {
        $this->age = $age;
    }

    public function getHealth() {
        return $this->health;
    }

    protected function setHealth($health) {
        $this->health = $health;
    }

}