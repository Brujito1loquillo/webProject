<?php

class View {
    protected $lang;
    protected $menu;
    
    protected $css = ["main", "aside"];
    protected $js = ["menu", "main"];
    
    public function __construct () {
        LogModel::create(new Log("Metodo View::__construct()."));
        
        
        LogModel::create(new Log("Llamada a LangController::getLang()."));
        $this->lang = LangController::getLang();
        
        LogModel::create(new Log("Llamada a MenuController::getMenu()."));
        $this->menu = MenuController::getMenu($this->lang);
    }
}

?>