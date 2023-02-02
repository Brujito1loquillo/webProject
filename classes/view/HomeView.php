<?php

class HomeView extends View {
    
    public function __construct () {
        LogModel::create(new Log("Metodo HomeView::__construct()."));
        
        LogModel::create(new Log("Llamada a View::__construct()."));
        parent::__construct();
    }
    
    public function show() {
        LogModel::create(new Log("Metodo HomeView->show()."));
        
        require_once "tmplt/head.php";
        require_once "tmplt/header.php";
        require_once "tmplt/aside.php";
        require_once "tmplt/home.php";
        require_once "tmplt/end.php";
    }
}

?>