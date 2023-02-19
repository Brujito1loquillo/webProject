<?php

class ContactView extends View {
    public function __construct () {
        LogModel::create(new Log("Metodo ContactView::__construct()."));
        
        LogModel::create(new Log("Llamada a View::__construct()."));
        parent::__construct();
        
        $this->title = $this->lang["practics"][7]["ufs"][1]["exs"]["07"]["title"];
        
        $this->css[] = "contact";
    }
    
    public function show ($info = null) {
        LogModel::create(new Log("Metodo ContactVew->show()."));
        
        switch (gettype($info)) {
            case "boolean": 
                $send = true;
                break;
            case "array":
                $send = false;
                if (!is_null($info["data"])) $data = $info["data"];
                if (!is_null($info["errors"])) $errors = $info["errors"];
                break;
            default:
                $send = false;
        }
        
        $lang = $this->lang;
        $text = $lang["practics"][7]["ufs"][1]["exs"]["07"]["text"];
        
        require_once "tmplt/head.php";
        require_once "tmplt/header.php";
        require_once "tmplt/aside.php";
        require_once "tmplt/contact.php";
        require_once "tmplt/end.php";
    }
    
    public function __toString () {
        return "ContactView";
    }
}

?>