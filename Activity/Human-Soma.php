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

	public $Name;
	public $Age; // public $Age = 0;
	public $Gender;
	public $IsAlive; // public $IsAlive = false;
	public $HasDied; // public $HasDied = false;

	public function __construct(){
		// Instruction did not say that you will set 'A Human <br>' as the name
		// echo 'A Human <br>';
		$this->name = "A Human";
		echo $this->name;
	}

	public function HumanBorn($Born){
		// Your if statement have incorrect syntax. Please review correct syntaxes.
		// if statement should like this.
		// 
		// if ({value you will compare} {conditional operator} {value you will compare it to}) {	
		// }
		//
		// Ex. 
		// if (10 > 5) {
		//		echo 'greater';
		// }
		if  ($Age = '0') {
			('HasDied' == FALSE) or ('IsAlive' == TRUE)
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

	public function CelebrateBirthday($Bday){
		// Here you forget your curly braces for the if statement.
		if ($IsAlive == TRUE)
			echo "Happy Birthday!!! <br/>";
	}
	// Instruction said that you will increment the age by 1;
	// public function celebrateBirthday() {
    //     if ($this->isAlive === true) {
    //         echo 'Happy Birthday !! <br>';
    //         $this->age++;
    //     }
    // }


	//You forgot to put curly braces for the method.
	public function HumanDies($Ded)
		if 	($Age = '85'){
			($HasDied == TRUE) or ($IsAlive == FALSE)
			echo "$Name + dies"; 
		}
	// Instruction said that you just need to set has Died to true and isAlive to false and echo the name with ' has died.'
	// public function humanDies() {
	// 	$this->hasDied = true;
	// 	$this->isAlive = false;
	// 	echo $this->name.' has died <br>';
	// }
			

}

$Human = new Human;
$Human->$Name('Kwan');
$Human->$Age('21');
$Human->$Gender('Male');


// Here as long it works, it should be okay, but it seems that you have a major mistakes in the class itself.

// $human = new Human;
// $human->humanBorn('Lowell', 'Male');
// for ($i = 0; $i <= 99; $i++) {
//     $human->celebrateBirthday();
// }
// $human->humanDies();
// echo $human->age;

?>