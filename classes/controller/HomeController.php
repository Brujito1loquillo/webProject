<?php

abstract class HomeController { // extends Controller {
    private function __construct () {}
    
    public static function show () {
        LogModel::create(new Log("Metodo HomeController::show()."));
        
        $view = new HomeView();
        
        LogModel::create(new Log("Llamada a HomceController::getNews($view)."));
        $news = self::getNews($view);
        
        LogModel::create(new Log("Llamada a HomeController::getDestacados($view)."));
        $destacadsos = self::getDestacados($view);
        
        LogModel::create(new Log("Llamada a HomeView->show($news)."));
        $view->show($news, $destacadsos);
    }
    
    public static function getNews (HomeView $view) {
        LogModel::create(new Log("Metodo HomeController::getNews($view)."));
        
        $lang = $view->getLang();
        
        $out = "";
        
        foreach ($lang["news"] as $new) {
            $out .= "<div>";
            
            $out .= "<h4>";
            
            $out .= $new["title"];
            
            $out .= "</h4>";
            
            $out .= "<p>";
            
            $out .= $new["texto"]; 
            
            $out .= "</p>";
            
            $out .= "</div>";
        }
        
        return $out;
    }
    
    public static function getDestacados(HomeView $view): string {
        LogModel::create(new Log("Metodo HomeController::getDestacados($view)."));
        
        $lang = $view->getLang();
        
        $destacados = $lang["destacados"];
        
        $paths = [];
        
        foreach ($destacados as $destacado) {
            LogModel::create(new Log("Llamada a HomeController::arrayFromPath($lang, $destacado)."));
            $paths[] = self::arrayFromPath($lang, $destacado);
        }
        
        $out = "";
        
        foreach ($paths as $path) {
            $out .= "<div>
                        <h4>{$path["title"]}</h4>
                        <a href=\"{$path["href"]}\">
                            {$lang["web"]["text"]["see"]}
                        </a>
                    </div>";
        }
        
        return $out;
    }
    
    public static function arrayFromPath(array $from, string $path): array {
        LogModel::create(new Log("Metodo arrayFromPath($from, $path)."));

        $explode = explode(".", $path);
        
        foreach ($explode as $i) {
            if (!isset($tmp)) {
                $tmp = &$from[$i];
            } else {
                $tmp = $tmp[$i];
            }
        }
        
        return $tmp;
    }
}

?>