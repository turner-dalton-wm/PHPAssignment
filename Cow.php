<?php
require_once('Animal.php');

class Cow extends Animal {

    public static $maxAge = 80;

    public function __construct($name, $age, $health) {
        parent::__construct($name, $age, $health);
    }

    public function eat() {
        $this->health += 1;
    }

}