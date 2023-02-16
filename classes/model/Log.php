<?php

class Log {
    private $date;
    private $message;
    
    public function __construct (string $message, string $date = "") {
        if ($date === "") $date = date("Y-m-d H:i:s");
        
        $this->message = $message;
        $this->date = $date;
    }
    
    /* **** *
     * GETS *
     * **** */
    public function getMessage () {
        return $this->message;
    }
    
    public function getDate () {
        return $this->date;
    }
}

?>