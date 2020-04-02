<?php

class Animal {

	public $variable01 = 'Type';
	public $variable02 = 'Breed';
	public $variable03 = 'Name';

	/**
	 * According to the instructions you just need to declare the 3 properties.
	 * No need to give it a default value.
	 * 
	 * Answer:
	 * public $type;
	 * public $breed;
	 * public $name; 
	*/

	public function __construct() {
		echo 'Pochi';
		/**
         * According to instructions you will set the name into 'Pochi' then echo it.
         * 
         * Answer:
         * $this->name = 'Pochi';
         * echo $this->name;
        */
	}

	public function method01 () {
        return $this->SetType = $Type;
	}
	/**
	 * According to instructions you will create a method named "setType" 
	 * then set the type property into what the parameter is.
	 * 
	 * Answer:
	 * public function setType ($type) {
	 *    $this->type = $type;
	 * }
	*/

	public function method02 () {
        return $this->SetBreed =$Breed;
	}
	/**
	 * According to instructions you will create a method named "setBreed" 
	 * then set the type property into what the parameter is.
	 * 
	 * Answer:
	 * public function setBreed ($breed) {
	 *    $this->breed = $breed;
	 * }
	*/

    public function method03 () {
        return $this->Growl;
	}
	/**
	 * According to instructions you will create a method named "growl" 
	 * then set the type property into what the parameter is.
	 * 
	 * Answer:
	 * public function setBreed ($growl) {
	 *    return $growl;
	 * }
	*/

}

$Animal = new Animal("Hairless", "herbivore");
/**
 * Instantiation with an argument like what you did above 
 * will set values to the constructor, not the custom methods inside.
 * 
 * Answer:
 * $animal = new Animal;
 * or
 * $animal = new Animal();
*/

	echo "<br>";
	echo "Type: ";
	echo "<br>";
	echo "Breed: ";
	echo "<br>";
	echo "Name: ";
	echo "<br>";

echo 'Growl'

/**
 * According to instructions you will just set the 
 * "type" and "breed" properties using your methods in the class
 * 
 * Answer:
 * $animals->setType('cat');
 * $animals->setBreed('persian');
*/

/**
 * According to the instructions, you should just 
 * echo the result of the method "growl"
 * 
 * Answer:
 * echo $animals->growl('roar');
*/
?>