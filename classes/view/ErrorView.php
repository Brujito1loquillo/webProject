<?php

class ErrorView extends View {
    public function __construct () {
        LogModel::create(new Log("Metodo ErrorView::__construct()."));
        
        LogModel::create(new Log("Llamada a View::__construct()."));
        parent::__construct();
        
        $this->title = $this->lang["exception"]["title"];
    }
    
    public function show(Exception $e) {
        LogModel::create(new Log("Metodo ErrorView->show({$e->getMessage()})."));
        
        require_once "tmplt/head.php";
        require_once "tmplt/header.php";
        require_once "tmplt/aside.php";
        require_once "tmplt/error.php";
        require_once "tmplt/end.php";
    }
}

?>