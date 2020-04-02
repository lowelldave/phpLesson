<?php

class animal {
    /** In most cases, the class name should be in Title Case
    * Ex.
    * class Person {
    * }
    */

    public $type;
    public $breed;
    public $name;

    public function __construct()
    {
        echo 'Pochi';
        /**
         * According to instructions you will set the name into 'Pochi' then echo it.
         * 
         * Answer:
         * $this->name = 'Pochi';
         * echo $this->name;
        */
    }

    public function setType($type)
    {
        $this->type = $type;
    }


    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function Growl($growl)
    {
        $this->growl = $growl;
        /**
         * According to the instructions you will just return the parameter growl
         * 
         * Answer:
         * return $growl;
        */
    }
}

$pets = new animal();
$pets->setType('JohnPaul');
$pets->setBreed('Gay');


$pets->Growl("yamete");
/** 
 * According to the instructions you should just echo the method growl
 * 
 * Answer:
 * echo $pets->growl("yamete");
*/

echo $pets->type;
echo $pets->breed;
echo $pets->growl;

?>
