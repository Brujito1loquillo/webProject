<?php

abstract class FrontController { //extends Controller {
    // private function __construct () {}
    
    public static function dispatch () {
        LogModel::create(new Log("Metodo FrontController::dispatch()."));
        
        /* ************************** *
         * DETECT URL AND POST PARAMS *
         * ************************** */
        if ($_SERVER["REQUEST_METHOD"] === "GET" && count($_GET) === 0) {
            $controller = "HomeController";
            $method = "show";
        } else if ($_SERVER["REQUEST_METHOD"] === "GET") {
            // var_dump($_SERVER["REQUEST_URI"]);
            $uri = $_SERVER["REQUEST_URI"];
            $uri = substr($uri, - strlen($uri) +2);
            // Parametros con el split by /
            // $uriParams = ;
            $params = explode("/", $uri);
            
            LogModel::create(new Log("!!!! SANITIZE !!!!"));
            // $controller = ucfirst(self::sanitize($params[0]));
            $controller = ucfirst($params[0]);
            unset($params[0]);
            
            // var_dump($params[1]);
            // $method = self::sanitize($params[0]);
            $method = $params[1];
            unset($params[1]);
            
            // var_dump($uri);
            // var_dump($params);
            // var_dump($controller);
            // var_dump($method);
            
        } else {
            throw new Exception("Ha habido una llegada con parametros no controlados");
        } 
        
        /* ************************************* *
         * AUTENTIFICATION CONTROLLER AND METHOD *
         * ************************************* */
        if (file_exists("classes/controller/$controller.php")) {
            if (method_exists($controller, $method)) {
                if (isset($params)) {
                // if (count($params) > 0) {
                    $controller::$method(...$params);
                } else {
                    $controller::$method();
                }
            } else {
                throw new Exception("El metodo solicitado, $method, no existe para este controlador.");
            }
        } else {
            throw new Exception("El controlador solicitado, $controller, no existe.");
        }
    }
}

?>