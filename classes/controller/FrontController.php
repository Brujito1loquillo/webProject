<?php

abstract class FrontController { // extends Controller {
    private function __construct () {}
    
    public static function dispatch () {
        LogModel::create(new Log("Metodo FrontController::dispatch()."));
        
        // Detectar los parametros
        if ($_SERVER["REQUEST_METHOD"] === "GET" && count($_GET) === 0) {
            // Landing
            $controller = "HomeController";
            $method = "show";
        } else if ($_SERVER["REQUEST_METHOD"] === "GET") {
            LogModel::create(new Log("!!!! SANITIZE !!!!"));
            // $uri = self::sanitize($_SERVER["REQUEST_URI"]);
            $uri = $_SERVER["REQUEST_URI"];
            
            LogModel::create(new Log("!!!! OJO CUANDO SE HAYA HECHO EL SANITIZE !!!!"));
            $uri = substr($uri, 2);
            
            $params = explode("/", $uri);
            
            $controller = ucfirst($params[0]) . "Controller";
            unset($params[0]);
            
            $method = $params[1];
            unset($params[1]);
        } else if ($_SERVER["REQUEST_METHOD"] === "POST") {
            LogModel::create(new Log("!!!! SANITIZE !!!!"));
            // $uri = self::sanitize($_SERVER["REQUEST_URI"]);
            $uri = $_SERVER["REQUEST_URI"];
            
            LogModel::create(new Log("!!!! OJO CUANDO SE HAYA HECHO EL SANITIZE !!!!"));
            $uri = substr($uri, 2);
            
            $params = explode("/", $uri);
            
            $controller = ucfirst($params[0]) . "Controller";
            unset($params[0]);
            
            $method = $params[1];
            unset($params[1]);
            
            $post = [];
            
            foreach ($_POST as $key => $value) {
                LogModel::create(new Log("!!!! SANITIZE !!!!"));
                // $key = self::sanitize($key);
                // $value = self::sanitize($value);
                $post[$key] = $value;
            }
            
            $params[] = $post;
        } else {
            throw new Exception("Ha habido una llegada con parametros no controlados.");
        }
        
        // Verificar que la clase exista
        if (file_exists("classes/controller/$controller.php")) {
            // Verificar que el metodo exista
            if (method_exists($controller, $method)) {
                if (count($params) === 0) {
                    $controller::$method();
                } else {
                    $controller::$method(...$params);
                }
            } else {
                throw new Exception("El metodo, $method, no existe en $controller.");
            }
        } else {
            throw new Exception("El controlador, $controller, no existe.");
        }
    }
}

?>