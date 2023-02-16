<?php

abstract class LogModel { // extends Model {
    private function __construct () {}
    
    /* **** *
     * CRUD *
     * **** */
    public function create (Log $new, string $file = "") {
        if ($file === "") $file = "logs/" . date("Y-m-d") . ".log";
        else $file = "logs/$file.log";
        
        // Crea el fichero si no existe
        if (!file_exists($file))
            file_put_contents($file, "");
        
        $newLogLine = "[{$new->getDate()}] => {$new->getMessage()}\n";
        $beforeLogs = file_get_contents($file); 
        
        file_put_contents($file, "$newLogLine$beforeLogs");
    }

    public static function read(String $file = "") {
        if ($file === "") $file = "logs/" . date("Y-m-d") . ".log";
        else $file = "logs/$file.log";
        
        $logs = [];
        
        if (file_exists($file)) {
            $fileContent = file($file);
            
            foreach ($fileContent as $line) {
                var_dump($line);
                if ($line !== "") {
                    $date = substr($line, 1, 19); // "2023-02-15 19:25:00"
                    echo "DATE: "; var_dump($date); echo "<br />";
                    
                    $message = substr($line, 25);
                    echo "MESSAGE: "; var_dump($message); echo "<br />";
                }
            }
        } else {
            $logs = false;
        }
        
        return $logs;
    }
    
    public static function split (string $file = "") {
        if ($file === "") $file = "logs/" . date("Y-m-d") . ".log";
        else $file = "logs/$file.log";
        
        file_put_contents($file, "\n" . file_get_contents($file));
    }
}

?>