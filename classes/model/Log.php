<?php

class Log {
    private $message;
    private $date;
    
    public function __construct (String $message, $date = null) {
        if ($date === null) $date = date("Y-m-d H:i:s");
        
        $this->message = $message;
        $this->date = $date;
    }
    
    public function getMessage () {
        return $this->message;
    }
    
    public function getDate () {
        return $this->date;
    }
}

?>