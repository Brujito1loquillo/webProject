<?php

class HomeView extends View {
    // private $news;
    // private $destacados;
    
    public function __construct () {
        LogModel::create(new Log("Metodo HomeView::__construct()."));
        
        LogModel::create(new Log("Llamada a View::__construct()."));
        parent::__construct();
        
        $this->title = $this->lang["home"]["title"];
        
        $this->css[] = "home";
    }
    
    public function show (string $news, string $destacados) {
        LogModel::create(new Log("Metodo HomeVew->show($news, $destacados)."));
        
        require_once "tmplt/head.php";
        require_once "tmplt/header.php";
        require_once "tmplt/aside.php";
        require_once "tmplt/home.php";
        require_once "tmplt/end.php";
    }
    
    /* **** *
     * GETS *
     * **** */
    
    public function getLang() {
        return $this->lang;
    }
    
    /* ********* *
     * Overrides *
     * ********* */
    
    public function __toString () {
        return "HomeView";
    }
}

?>