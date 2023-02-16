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
        }
        
        // Verificar que la clase exista
        if (file_exists("classes/controller/$controller.php")) {
            // Verificar que el metodo exista
            if (method_exists($controller, $method)) {
                $controller::$method();
            } else {
                throw new Exception("El metodo, $method, no existe en $controller.");
            }
        } else {
            throw new Exception("El controlador, $controller, no existe.");
        }
    }
}

?>