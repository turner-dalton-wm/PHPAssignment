<?php

class Animal {

    protected $name;
    protected $age;
    protected $maxAge;
    protected $health;

    public function __construct($name, $age, $health) {
        $this->name = $name;
        $this->age = $age;
        $this->health = $health;
    }

    public function eat() {
        $this->health += 2;
    }

    public function sleep() {
        $this->age += 1;
        $this->health += 1;
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

    public function getMaxAge() {
        return $this->maxAge;
    }

    protected function setMaxAge($maxAge) {
        $this->maxAge = $maxAge;
    }

    public function getHealth() {
        return $this->health;
    }

    protected function setHealth($health) {
        $this->health = $health;
    }

}

class Bull extends Animal {

    public function __construct($name, $age, $health) {
        parent::__construct($name, $age, $health);
        $this->setMaxAge(100);
    }

    public function eat() {
        $this->health += 3;
    }

}

class Cow extends Animal {

    public function __construct($name, $age, $health) {
        parent::__construct($name, $age, $health);
        $this->setMaxAge(80);
    }

    public function eat() {
        $this->health += 1;
    }

}