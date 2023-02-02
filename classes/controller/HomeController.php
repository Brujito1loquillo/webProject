<?php

abstract class HomeController { // extends Controller {
    public static function show () {
        LogModel::create(new Log("Metodo HomeController::show()."));
        
        LogModel::create(new Log("Llamada a HomeView->show()."));
        $view = new HomeView();
        $view->show();
    }
}

?>