<?php

// Activity
// - Create a class named "Human"
// - Declare properties named "name", "age" with a value of 0, "gender", "isAlive" with a value of false, "hasDied" with a value of false
// - Create a constructor that echo "A Human <br>".
// - Create method named, "humanBorn" that checks if hasDied === false then sets name, gender and isAlive to true
// - Create a method named "celebrateBirthday" that check if isAlive === true then increments the age and echo "Happy Birthday !! <br>"
// - Create a method named "humanDies" that sets the hasDied to true and isAlive to false and echo the name + "dies" Ex. "Lowell dies."
// - Make your program run. Do what you want to do. as long the program runs.

// Note: As long that the requirements are met, you can add more echo you want as long its acceptable and decent. 
class Human {
	// Please remember that using single quote (') or double quote (") makes your value a "string"  not a number or boolean
	// In this case we need to set up boolean and number
	public $name;
	public $age = '0'; // public $age = 0;
	public $gender = 'false'; // public $gender;
	public $isAlive = 'false'; // public $isAlive = false;
	public $hasDied = 'false'; // public $hasDied = false;
	
	public function __construct()
	{
		// Instruction did not say that you will set 'A Human <br>' as the name
		// echo 'A Human <br>';
		$this->name = 'A Human <br>';
		echo $this->name;
	}

	public function humanBorn()
	{
		// This is pretty much close, but isAlive should not be in string
		// Also please make use of the parameters to set your data specially if its user defined.
		if ($hasDied === false) {

		$this->name = 'Clark';				
		$this->gender = 'true';
		$this->isAlive = 'true';
		}
	}
	// public function humanBorn($name, $gender) {
    //     if ($this->hasDied === false) {
    //         $this->name = $name;
    //         $this->gender = $gender;
    //         $this->isAlive = true;
    //     }
    // }

	public function celebrateBirthday()
	{
		// This is pretty much close, but you should research how to use echo correctly.
		// Incrementing values should not be done in string form.
		if ($isAlive === true) {
			echo '$age++','Happy Birthday <br>';
		}
	}
	// public function celebrateBirthday() {
    //     if ($this->isAlive === true) {
    //         echo 'Happy Birthday !! <br>';
    //         $this->age++;
    //     }
    // }

	public function humanDies()
	{
	}
	// Instruction said that you just need to set has Died to true and isAlive to false and echo the name with ' has died.'
	// public function humanDies() {
	// 	$this->hasDied = true;
	// 	$this->isAlive = false;
	// 	echo $this->name.' has died <br>';
	// }

}
$Humans = new Human;

// Here as long it works, it should be okay, but it seems that you have a major mistakes in the class itself.

// $human = new Human;
// $human->humanBorn('Lowell', 'Male');
// for ($i = 0; $i <= 99; $i++) {
//     $human->celebrateBirthday();
// }
// $human->humanDies();
// echo $human->age;
?>