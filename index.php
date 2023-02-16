<?php

/* ******* *
 * ERRORES *
 * ******* */
ini_set("display_errors", 1);

/* **** *
 * LOGS *
 * **** */
require_once "classes/model/LogModel.php";
require_once "classes/model/Log.php";

LogModel::create(new Log("## Nueva Carga ##"));
LogModel::create(new Log("IP: {$_SERVER["REMOTE_ADDR"]}"), "visitantes");

/* ************************ *
 * CARGA DINAMICA DE CLASES *
 * ************************ */
spl_autoload_register(function ($class) {
    LogModel::create(new Log("Funcion spl_autoload_register($class)."));

    $classType = "model";
    
    if (fnmatch("*Controller", $class)) $classType = "controller";
    else if (fnmatch("*View", $class)) $classType = "view";
    
    if (file_exists("classes/$classType/$class.php")) {
        LogModel::create(new Log("La clase, $class, existe y se va a cargar."));
        
        require_once "classes/$classType/$class.php";
    } else {
        LogModel::create(new Log("La clase, $class, no existe y se va a lanzar una Excepcion."));
        
        throw new Exception("La clase, $class, no existe.");
    }
});

/* ********* *
 * CONTENIDO *
 * ********* */
try {
    LogModel::create(new Log("Llamada a FrontController::dispatch()."));
    
    FrontController::dispatch();
} catch (Exception $e) {
    LogModel::create(new Log("Algo ha fallado y se ha recogido una Excepcion: {$e->getMessage()}"));
    
    LogModel::create(new Log("Llamanda a ErrorView->show({$e->getMessage()})"));
    $view = new ErrorView();
    $view->show($e);
} finally {
    LogModel::create(new Log("## Fin de Carga ##"));
    LogModel::split();
}

?>