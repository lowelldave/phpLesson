<?php
/**
 * Here we include another class using include.
*/
include('Person.php');

class PhpLesson {
    private $variable01;

    public function __construct($param = null) {
        $this->variable01 = $param;
    }

    public function method01() {
        echo $this->variable01;
    }

    public function method02() {
        return $this->variable01;
    }
}


/**
 * Here we instantiate again PhpLesson but we added some parameter to set value to the default values of the class
*/
$lesson02 = new PhpLesson('Clark');
// uncomment if you want to try this.
// $lesson02->method01();

/**
 * Since we include Person class we can set a value to the its constructor using the return of a method in the PhpLesson class.
*/
$Person = new Person( $lesson02->method02() );
// uncomment if you to try this.
// $Person->run();
// echo '<br>';
// echo $Person->status;

/**
 * Lets see if the person is busy or not.
 * Here we try to make the person jump and run but since we had some checker if the there is an ongoing activty this person can't do both
 * so here you can call the stop function that makes the function stop so you can do another activity.
*/
// uncomment if you want to try this.
// $Person->jump();

// uncomment if you want to stop
// $Person->stop();

// uncomment if you want to try this.
// echo '<br>';
// $Person->run();

// echo '<br>';
// echo $Person->status;


/**
 * Another person means another set of statuses. Person and Person02 don't share values.
*/
// uncomment if you want to try this.
// $Person02 = new Person('Gerard');
// echo '<br>';
// $Person02->jump();
// echo '<br>';
// $Person02->run();
// echo '<br>';
// $Person02->stop();

?>
