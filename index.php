<?php
/* *
 * ERRORS *
 */
ini_set("display_errors", 1);

/* *
 * LOGS *
 */
require_once "classes/model/LogModel.php";
require_once "classes/model/Log.php";

LogModel::create(new Log("## Nueva Carga ##"));
LogModel::create(new Log("IP: {$_SERVER["REMOTE_ADDR"]}"), "logs/vistiantes.log");

/* *
 * CLASSES *
 */
spl_autoload_register(function ($class) {
    LogModel::create(new Log("Cargando clase $class."));
    
    $cType = "model";
    
    if (fnmatch("*Controller", $class))
        $cType = "controller";
    else if (fnmatch("*View", $class))
        $cType = "view";

    LogModel::create(new Log("La clase es de tipo: $cType."));
    
    if (file_exists("classes/$cType/$class.php")) {
        LogModel::create(new Log("La clase existe y se va a cargar."));
        
        require_once "classes/$cType/$class.php";
    } else {
        LogModel::create(new Log("La clase no existe y se va a lanzar una excepcion."));
        
        throw new Exception("La clase $class no existe.");
    }
});

/* *
 * CONTENT *
 */
try {
    LogModel::create(new Log("Llamada a FrontController::dispatch()."));
    
    FrontController::dispatch();
} catch (Exception $e) {
    LogModel::create(new Log("Algo ha fallado y se ha recogido una excepcion: {$e->getMessage()}"));
    
    LogModel::create(new Log("Llamando a ErrorView->show(\$e)"));
    
    $view = new ErrorView();
    $view->show($e);
    
    // ErrorView::show($e);
} finally {
    /* **************** *
     * SPLIT LOG BLOCKS *
     * **************** */
    $logFile = "logs/" . date("Y-m") . ".log";
    file_put_contents($logFile, "\n" . file_get_contents($logFile));
}
?>