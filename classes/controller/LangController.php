<?php

abstract class LangController { // extends Controller {
    private const HOUR = 3600;
    private const DAY = self::HOUR * 24;
    private const WEEK = self::DAY * 7;
    private const MONTH = self::WEEK * 4;
    private const YEAR = self::MONTH * 12;
    
    
    private static function deprecated_getLang() {
        LogModel::create(new Log("Metodo LangController::deprecated_getLang()."));
        
        if (isset($_COOKIE["lang"])) {
            if (file_exists("langs/{$_COOKIE["lang"]}.php"))
                require_once "langs/{$_COOKIE["lang"]}.php";
            else {
                LogModel::create(new Log("Llamada a LangController::setLang()."));
                self::setLang("es", "?");
            }
        } else {
            LogModel::create(new Log("Llamada a LangController::setLang()."));
            self::setLang("es", "?");
        }
        
        if(!file_exists("lang/{$_COOKIE["lang"]}.php")) {
            // header("Location: /?LangController/setLang/es/?");
            self::setLang("es", "?");
        }
        
        // var_dump(require_once "langs/{$_COOKIE["lang"]}.php");
        require_once "langs/{$_COOKIE["lang"]}.php";
        
        // if (!$langFile) header("Location: /'LangController/setLang/es/?");
        
        if (!isset($lang)) {
            // header("Location: /?LangController/setLang/es/?");
            self::setLang("es", "?");
        }
        
        return $lang;
    }
    
    private static function deprecated2_getLang() {
        LogModel::create(new Log("Metodo LangController::deprecated2_getLang()."));
        
        if (isset($_COOKIE["lang"])) {
            $lFileName = "langs/{$_COOKIE["lang"]}.php";
            /* if (file_exists($lFileName)) {
                require_once $lFileName;
            } else {
                LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
                self::setLang("es", "?");
            }
            */
            if (!file_exists($lFileName)) {
                LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
                self::setLang("es", "?");
            }
        } else {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        // require_once $lFileName;
        
        try {
            require_once $lFileName;
        } catch (Exception $e) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        /*
        if (!isset($lang)) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        */
        
        return $lang;
    }
    
    public static function getLang () {
        LogModel::create(new Log("Metodo LangController::getLang()."));
        
        $lFileName = "langs/{$_COOKIE["lang"]}.php";
        
        if (!isset($_COOKIE["lang"]) || !file_exists($lFileName)) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        try {
            require_once $lFileName;
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
    
    private static function deprecated_setLang (String $lName, String $go) {
        LogModel::create(new Log("Metodo LangController::deprecated_setLang()."));
        
        LogModel::create(new Log("!!!! SANITIZE !!!!"));
        // $lName = self::sanitize($lName);
        
        if (file_exists("langs/$lName.php")) {
            // SET COOKIE
            setcookie("lang", $lName, time() + self::WEEK * 2);
            $_COOKIE["lang"] = $lName;
        } else {
            if (isset($_COOKIE["lang"])) {
                self::setLang($_COOKIE["lang"], "?");
            } else {
                self::setLang("es", "?");
            }
        }
        
        header("Location: /$go");
    }
    
    private static function deprecated2_setLang (String $lName, String $go) {
        LogModel::create(new Log("Metodo LangController::deprecated2_setLang()."));
        
        LogModel::create(new Log("!!!! SANITIZE !!!!"));
        // $lName = self::sanitize($lName);
        
        if (file_exists("langs/$lName.php")) {
            // SET COOKIE
            setcookie("lang", $lName, time() + self::WEEK * 2);
            $_COOKIE["lang"] = $lName;
        } else {
            /*if (isset($_COOKIE["lang"])) {
                self::setLang($_COOKIE["lang"], "?");
            } else { */
                self::setLang("es", "?");
            /*}*/
        }
        
        // header("Location: /$go");
    }
    
    public static function setLang (String $lName, String $go) {
        LogModel::create(new Log("Metodo LangController::deprecated2_setLang()."));
        
        LogModel::create(new Log("!!!! SANITIZE !!!!"));
        // $lName = self::sanitize($lName);
        // $go = self::sanitize($go);
        
        if (!file_exists("langs/$lName.php")) {
            LogModel::create(new Log("Llamada a LangController::setLang(\"es\", \"?\")."));
            self::setLang("es", "?");
        }
        
        setcookie("lang", $lName, time() + self::WEEK * 2);
        $_COOKIE["lang"] = $lName;
        
        header("Location: /$go");
    }
    
    public static function showLangs() {
        LogModel::create(new Log("Metodo LangController::showLangs()."));
        
        $langs = scandir("langs");
      
        $out = "";
        
        foreach ($langs as $key => $lang) {
            if (!fnmatch(".*", $lang)) {
                // var_dump($lang);
                $lang = substr($lang, 0, strlen($lang) - 4);
                
                // var_dump($_SERVER["REQUEST_URI"]);
                $uri = substr($_SERVER["REQUEST_URI"], - strlen($_SERVER["REQUEST_URI"]) +1);
                // var_dump($uri);
                
                
                //$out .= "<div id =\"$lang\"><a href=\"?langController/setLang/$lang\"><img title=\"$lang\" alt=\"$lang\" src=\"img/icons/langs/$lang.png\" /></a></div>";
                $out .= "<a href=\"?langController/setLang/$lang/$uri\">
                            <img title=\"$lang\" alt=\"$lang\" src=\"img/icons/langs/$lang.png\" />
                        </a>";
            }
        }
        
        return $out;
        
        LogModel::create(new Log("FIN Metodo LangController::showLangs()."));
    }
}

?>