<?php

class RegisterView extends View {
    public function __construct () {
        parent::__construct();
        
        $this->title = $this->lang["practics"][7]["ufs"][1]["exs"]["08"]["title"];
    }
    
    public function show() {
        
        $text = $this->lang["practics"][7]["ufs"][1]["exs"]["08"]["text"];
        require_once "tmplt/head.php";
        require_once "tmplt/header.php";
        require_once "tmplt/aside.php";
        require_once "tmplt/register.php";
        require_once "tmplt/end.php";
    }
    
    public function __toString () {
        return "RegisterView";
    }
}

?>