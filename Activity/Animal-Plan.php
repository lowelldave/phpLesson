<?php

class Animal {

    public $type = 'type';
    public $breed = 'breed';
    public $name;
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

    public function setType($type) {
        /**
         * According to instructions you will set the type property 
         * into what the parameter is.
         * 
         * Answer:
         * $this->type = $type;
        */
    }

    public function setBreed($breed) {
        /**
         * According to instructions you will set the breed property 
         * into what the parameter is.
         * 
         * Answer:
         * $this->breed = $breed;
        */
    } 

    public function growl($growl) {
        return $growl;
    }
}

$animals = new Animal;

/**
 * According to instructions you will just set the 
 * "type" and "breed" properties using your methods in the class
 * 
 * Answer:
 * $animals->setType('cat');
 * $animals->setBreed('persian');
*/

echo $animals->growl('roar');
?>
