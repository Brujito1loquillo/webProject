<?php

abstract class LangController { // extends Controller {
    private const HOUR = 3600;
    private const DAY = self::HOUR * 24;
    private const WEEK = self::DAY * 7;
    private const MONTH = self::WEEK * 4;
    private const YEAR = self::MONTH * 12;
    
    public static function getLang() {
        LogModel::create(new Log("Metodo LangController::getLang()."));
        
        if (isset($_COOKIE["lang"])) {
            if (file_exists("langs/{$_COOKIE["lang"]}.php"))
                require_once "langs/{$_COOKIE["lang"]}.php";
            else {
                LogModel::create(new Log("Llamada a LangController::setLang()."));
                self::setLang("es");
            }
        } else {
            LogModel::create(new Log("Llamada a LangController::setLang()."));
            self::setLang("es");
        }
        
        require_once "langs/{$_COOKIE["lang"]}.php";
        return $lang;
    }
    
    public static function setLang (String $lName) {
        LogModel::create(new Log("Metodo LangController::setLang()."));
        
        LogModel::create(new Log("!!!! SANITIZE !!!!"));
        // $lName = self::sanitize($lName);
        
        if (file_exists("langs/$lName.php")) {
            // SET COOKIE
            setcookie("lang", $lName, time() + self::WEEK * 2);
            $_COOKIE["lang"] = $lName;
        } else {
            if (isset($_COOKIE["lang"])) {
                self::setLang($_COOKIE["lang"]);
            } else {
                self::setLang("es");
            }
        }
    }
}

?>