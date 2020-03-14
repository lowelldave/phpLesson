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
    public $variable03;

    /**
     * __construct is a php default function that runs upon instantiation of a class.
    */
    public function __construct($param = null) {
        $this->variable03 = $param;
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

    public function method04 () {
        echo $this->variable03;
    }
}


/**
 * Here we instantiate again PhpLesson but we added some parameter to set value to the default values of the class
*/
$lesson02 = new PhpLesson('contruct string');

$lesson02->method04();

?>

