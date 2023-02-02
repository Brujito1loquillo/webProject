<?php

abstract class MenuController { // extends Controller {
    // private function __contruct() {}
    
    public static function getMenu (Array $lang) {
        LogModel::create(new Log("Metodo MenuController::getMenu(\$lang)"));
        
        $menu = "<ul>";
        
        foreach ($lang["practics"] as $module => $mCont) {
            $menu .= "<li>M$module {$mCont["title"]}";
            
            foreach ($mCont["ufs"] as $uf => $ufCont) {
                $menu .= "<ul class=\"uf\"><li>UF$uf {$ufCont["short"]}";
                
                foreach ($ufCont["exs"] as $ex => $exCont) {
                    $menu .= "<ul class=\"ex\">";
                    $menu .= "<li>";
                    $menu .= "<a href=\"{$exCont["href"]}\">";
                    
                    $menu .= "E$ex {$exCont["title"]}";
                    
                    $menu .= "</a>";
                    $menu .= "</li>";
                    $menu .= "</ul>";
                }
                
                $menu .= "</li>";
                $menu .= "</ul>";
            }
            
            $menu .= "</li>";
        }
        
        $menu .= "</ul>";
        
        return $menu;
    }
}

?>