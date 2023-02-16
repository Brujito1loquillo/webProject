<?php

abstract class MenuController { // extends Controller {
    private function __construct () {}
    
    public static function getMenu (Array $lang) {
        LogModel::create(new Log("Metodo MenuController::getMenu()."));
        
        $menu = "<ul>";
        
        foreach ($lang["practics"] as $moduleKey => $module) {
            $menu .= "<li>";
            $menu .= "M$moduleKey {$module["title"]}";
            
            foreach ($module["ufs"] as $ufKey => $uf) {
                $menu .= "<ul>";
                $menu .= "<li>";
                $menu .= "UF$ufKey {$uf["short"]}";
                
                foreach($uf["exs"] as $exKey => $ex) {
                    $menu .= "<ul>";
                    $menu .= "<li>";
                    $menu .= "<a href=\"{$ex["href"]}\">";
                    
                    $menu .= "E$exKey {$ex["title"]}";
                    
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