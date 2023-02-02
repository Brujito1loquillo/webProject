<?php

abstract class LogModel {
    // private $logs;
    // private static $logFile = "logs/develope.log";
    // private static $logFile =  "logs/" . date("Y-m") . ".log";
    
    /* *
     * CONSTRUCT *
     */
    /*
    public function __construct () {
        $this->logs = self::read();
    }
    */
    
    /* **** *
     * CRUD *
     * **** */
    public static function create (Log $new, String $file = null) {
        if ($file === null) $file = "logs/" . date("Y-m") . ".log";
        
        if (!file_exists($file)) { file_put_contents($file, ""); }
        
        $lNew = "[{$new->getDate()}] - {$new->getMessage()}\n";
        $cntnt = file_get_contents($file);
        
        file_put_contents($file, $lNew . $cntnt);
    }
    
    public static function read (String $file = null) {
        if ($file === null) $file = "logs/" . date("Y-m") . ".log";
    }
}

?>