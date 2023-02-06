<?php

class ErrorView extends View {
    // private $lang;
    
    public function __construct () {
        LogModel::create(new Log("Metodo ErrorLog::__construct()."));
        
        /*
        if (isset($_COOKIE["lang"])) {
            require_once "langs/{$_COOKIE["lang"]}.php";
        } else {
            require_once "langs/es.php";
        }
        
        $this->lang = $lang;
        */
        
        // require_once "langs/es.php";
        // $this->lang = $lang;
        
        LogModel::create(new Log("Llamada a View::__construct()."));
        parent::__construct();
    }
    
    public function show (Exception $e) {
        LogModel::create(new Log("Metodo ErrorLog->show(\$e)."));
        
        require_once "tmplt/head.php";
        require_once "tmplt/header.php";
        require_once "tmplt/aside.php";
        require_once "tmplt/error.php";
        require_once "tmplt/end.php";
    }
}

?>