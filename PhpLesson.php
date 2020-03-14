<?php
/**
 * PhpLesson is a class. It serves as a blueprint on how a certain module is gonna behave based on the functions and variables inside. 
 */
class PhpLesson {
    /**
     * Once you instantiate the class you can access the variables and functions inside the specified class
    */

    /**
     * Private / Public / Protected are access modifiers. It controls the accessability of this class' variables and function for the other classes
     * Note: Research the net for more details 
    */
    private $variable01 = 'String';
    public $variable02 = 'string not changed';

    /**
     * __construct is a php default function that runs upon instantiation of a class.
    */
    public function __construct() {
        echo 'Constructor!!';
    }

    /**
     * Here are the methods you can use when the class is called.
    */
    public function method01 () {
        return $this->variable01;
    }

    public function method02 () {
        $string2 = $this->variable01.' Number 2!';
        return $string2;
    }

    public function method03 ($param) {
        $this->variable02 = $param;
    }
}

/**
 * Since everything we have discussed is just parts of a class, it cannot run by itself so you need to instantiate it so you can use it on you will.
*/
$lesson = new PhpLesson;

/**
 * Here I created a simple function call on how the method is called.
*/
echo $lesson->method01();

/**
 * Here We echo the initial value of variable02 then I changed the value of the variable02 using the function we created in the class then echo it again.
*/
echo $lesson->variable02;
$lesson->method03('String changed');
echo $lesson->variable02;

?>

