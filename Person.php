<?php
class Person {
    private $name;
    public $status;
    public $is_busy = false;

    /**
     * __construct
     * set person name according to params and set the default activity of Person class
    */
    public function __construct($param = 'This person') {
        $this->name = $param;
        $this->setActivity();
    }

    /**
     * run
     * set Person to running
    */
    public function run() {
        // just a checker if this person is doing a activity, if true it cannot do the current activity since it has ongoing activity.
        if ($this->checkStatus() === true) {
            return false;
        }
        echo $this->name.' starts running.';
        $this->setActivity('running');
        $this->is_busy = true;

        return true;
    }

    /**
     * jump
     * set Person to running
    */
    public function jump() {
        // just a checker if this person is doing a activity, if true it cannot do the current activity since it has ongoing activity.
        if ($this->checkStatus() === true) {
            return false;
        }
        echo $this->name.' starts jumping.';
        $this->setActivity('jumping');
        $this->is_busy = true;

        return true;
    }

    /**
     * stop
     * stop Person activity
    */
    public function stop() {
        echo $this->name.' stopped.';
        $this->setActivity();
        $this->is_busy = false;
    }

    /**
     * checkStatus
     * return the status is busy or not
     * @return boolean
    */
    public function checkStatus() {
        if ($this->is_busy === true) {
            echo $this->name.' is busy and cannot do another activity.';
        }

        return $this->is_busy;
    }

    /**
     * setActivity
     * @param $activity string
     * setting the status according to params and to null if no params given
    */
    public function setActivity($activity = null) {
        if ($activity === null) {
            $this->status = $this->name.' is doing nothing.';
        } else {
            $this->status = $this->name.' is '.$activity;
        }
    }
}
?>