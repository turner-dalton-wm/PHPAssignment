<?php
require_once('Animal.php');

class Bull extends Animal {

    public static $maxAge = 100;

    public function __construct($name, $age, $health) {
        parent::__construct($name, $age, $health);
    }

    public function eat() {
        $this->health += 3;
    }

}