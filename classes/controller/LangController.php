<?php

abstract class LangController { // extends Controller {
    private const HOUR = 3600;
    private const DAY = self::HOUR * 24;
    private const WEEK = self::DAY * 7;
    private const MONTH = self::WEEK * 4;
    private const YEAR = self::MONTH * 12;
    
    private function __construct () {}
    
    public static function getLang () {
        LogModel::create(new Log("Metodo LangController::getLang()."));
        
        $langFileName = "langs/{$_COOKIE["lang"]}.php";
        
        if (!isset($_COOKIE["lang"]) || !file_exists($langFileName)) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        try {
            require_once $langFileName;
        } catch (Exception $e) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        if (!isset($lang)) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        return $lang;
    }
    
    public static function setLang (string $langName, string $go) {
        LogModel::create(new Log("Metodo LangController::_setLang($langName, $go)."));
        
        LogModel::create(new Log("!!!! SANITIZE !!!!"));
        // $langName = self::sanitize($langName);
        // $go = self::sanitize($go);
        
        if (!file_exists("langs/$langName.php")) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        setcookie("lang", $langName, time() + self::WEEK * 2);
        $_COOKIE["lang"] = $langName;
        
        header("Location: /$go");
    }
    
    public static function showLangs () {}
}

?>