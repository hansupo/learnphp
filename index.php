<?php

class Person {
    private $name;
    private $age;
    public function __construct($name, $age) {
        var_dump('object created');
        $this->name = $name;
        $this->age = $age;
    }

    public function __invoke(...$args) {
        var_dump($args);
    }

    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __get($name) {
        return 'some value';
        var_dump($name);
    }

    public function __toString() {
        return $this->name . ' is ' . $this->age . ' years old';
    }

    public function __destruct() {
        var_dump('object destroyed');
    }
}

$person = new Person('John', 30);
$person->gender = 'Male';
var_dump($person->$weigth);
$person->notexists(1, 'lol', 'something');
echo $person;
$person('some args');
var_dump($person);