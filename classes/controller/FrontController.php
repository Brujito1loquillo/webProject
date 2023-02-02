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
        } else {
            throw new Exception("Ha habido una llegada con parametros no controlados");
        }
        
        /* ************************************* *
         * AUTENTIFICATION CONTROLLER AND METHOD *
         * ************************************* */
        if (file_exists("classes/controller/$controller.php")) {
            if (method_exists($controller, $method)) {
                $controller::$method();
            } else {
                throw new Exception("El metodo solicitado, $method, no existe para este controlador.");
            }
        } else {
            throw new Exception("El controlador solicitado, $controller, no existe.");
        }
    }
}

?>