<?php

class Human {
    public $name, $age = 0, $gender, $isAlive = false, $hasDied = false;

    public function __construct(){
        echo 'A Human <br>';
    }

    public function humanBorn($name, $gender) {
        if ($this->hasDied === false) {
            $this->name = $name;
            $this->gender = $gender;
            $this->isAlive = true;
            echo $name.' has been born!! <br>';
        }
    }

    public function celebrateBirthday() {
        if ($this->isAlive === true) {
            echo 'Happy Birthday !! <br>';
            $this->age++;
        }
    }

    public function humanDies() {
        $this->hasDied = true;
        $this->isAlive = false;
        echo $this->name.' has died <br>';
    }
}

$human = new Human;

$human->humanBorn('Lowell', 'Male');
for ($i = 0; $i <= 99; $i++) {
    $human->celebrateBirthday();
}
$human->humanDies();
echo $human->age;

?>