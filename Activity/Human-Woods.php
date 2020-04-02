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

class Human
{
	public $name;
	public $age = 0;
	public $gender;
	public $isAlive = false;
	public $hasDied = false;

	// construct name should be in lower case
	// and it is "construct" not "constructor"
	public function __constructor()
	{
		echo 'A Human <br>';
	}

	public function humanBorn()
	{
		if($this->isAlive === false)
			{

			}
	}
	// Instruction said that you just need to check if hasDied is false then you will set the name, gender, and isAlive is true
	// Also please make use of the parameters to set your data specially if its user defined.
	// public function humanBorn($name, $gender) {
    //     if ($this->hasDied === false) {
    //         $this->name = $name;
    //         $this->gender = $gender;
    //         $this->isAlive = true;
    //     }
    // }

	public function celebrateBirthday()
	{
		if($this->isAlive === true)
		{
			$this->age += 1;
			echo 'Happy Birthday !! <br>'
		}
		return true;


	}
	// This is good. But ther eis no need for you to return true, no one needs to use that return.

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
$pipol = new Human();
$pipol->celebrateBirthday();

// Here as long it works, it should be okay, but it seems that you have a major mistakes in the class itself.

// $human = new Human;
// $human->humanBorn('Lowell', 'Male');
// for ($i = 0; $i <= 99; $i++) {
//     $human->celebrateBirthday();
// }
// $human->humanDies();
// echo $human->age;

?>