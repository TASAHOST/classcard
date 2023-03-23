<?php

class Student {
    public function welcome() {
        return "Welcome to Devdit";
    }
}
$hello = new Hello();
echo $hello->welcome();


class User {

    public $firstName;
    public $lastName;
    public $homeTown;
    private $birthYear;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct() {
        // code when object is destroyed
    }

    public function indroduce() {
        echo "Hello, my $this->firstName $this->lastName.";
        echo "I live in $this->homeTown.";
    }

    public function setBirthYear($birthYear) {
        $this->birthYear = $birthYear;
    }

    public function getAge() {
        $currentYear = 2017;
        $age = $currentYear - $this->birthYear; 
        return $age;
    }

}





?>