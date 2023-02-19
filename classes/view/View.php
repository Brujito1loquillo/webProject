<?php

class View {
    protected $lang;
    protected $menu;
    
    // protected $css = ["main", "aside"];
    protected $css = ["main"];
    // protected $js = ["menu", "main"];
    protected $js = [];
    
    protected $title = "";
    
    public function __construct () {
        LogModel::create(new Log("Metodo View::__construct()."));
        
        LogModel::create(new Log("Llamada a LangController::getLang()."));
        $this->lang = LangController::getLang();
        
        LogModel::create(new Log("Llamada a MenuController::getMenu()."));
        $this->menu = MenuController::getMenu($this->lang);
    }
    
    public function getLang() {
        return $this->lang;
    }
}

?>