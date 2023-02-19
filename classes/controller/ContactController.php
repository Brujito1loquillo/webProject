<?php

abstract class ContactController { // extends Controller {
    private const NAME = 0;
    private const SURNAME = 0;
    private const EMAIL = 1;
    // private const WHY = 2;
    private const DEVICE = 3;
    
    
    private function __construct () {}
    
    public static function show (array $args = null) {
        LogModel::create(new Log("Metodo ContactController::show()."));
        
        LogModel::create(new Log("Llamada a ContactView->show(\$args)."));
        $view = new ContactView();
        
        if (!is_null($args)) {
            $info = self::checkData($args, $view);
            
            $view->show($info);
        } else {
            $view->show();
        }
    }
    
    private static function checkData (array $args, ContactView $view) { // : array {
        LogModel::create(new Log("Metodo ContacatController:checkData(\$args, $view)"));
        
        $info = []; $info["data"] = []; $info["errors"] = [];
        $lang = $view->getLang();
        $text = $lang["practics"][7]["ufs"][1]["exs"]["07"]["text"]["errors"];
        
        /* *
         * NAME
         */
        $name = trim($args["name"]);
        if ($name !== "") {
            if (self::validate($name, self::NAME)) {
                $info["data"]["name"] = $name;
            } else {
                $info["errors"]["name"] = $text["bName"];
            }
        } else {
            $info["errors"]["name"] = $text["vName"];
        }
        
        /* *
         * SURNAME
         */
        $surname = trim($args["surname"]);
        
        if ($surname !== "") {
            if (self::validate($surname, self::SURNAME)) {
                $info["data"]["surname"] = $surname;
            } else {
                $info["errors"]["surname"] = $text["bSurname"];
            }
        } else {
            $info["errors"]["surname"] = $text["vSurname"];
        }
        
        /* *
         * EMAIL
         */
        $email = trim($args["email"]);
        
        if ($email !== "") {
            if (self::validate($email, self::EMAIL)) {
                $info["data"]["email"] = $email;
            } else {
                $info["errors"]["email"] = $text["bEmail"];
            }
        } else {
            $info["errors"]["email"] = $text["vEmail"];
        }
        
        /* *
         * MESSAGE
         */
        $message = trim($args["message"]);
        
        if ($message !== "") {
            $info["data"]["message"] = $message;
        } else {
            $info["errors"]["message"] = $text["vMessage"];
        }
        
        /* *
         * WHY
         */
        $issiue = isset($args["issiue"]);
        $imprube = isset($args["imprube"]);
        $other = isset($args["other"]);
        
        if (!$issiue && !$imprube && !$other) {
            $info["errors"]["why"] = $text["vWhy"];
        } else {
            if ($issiue) $info["data"]["why"][] = "issiue";
            if ($imprube) $info["data"]["why"][] = "imprube";
            if ($other) $info["data"]["why"][] = "other";
        }
        
        /* *
         * DEVICE
         */
        $device = $args["device"];
        
        if (self::validate($device, self::DEVICE)) {
            $info["data"]["device"] = $device;
        } else {
            $info["errors"]["device"] = $text["bDevice"];
        }
        
        /* *
         * PERSISTENCIA
         */
        if (count($info["errors"]) === 0) {
            $info = $info["data"];
            
            LogModel::create(new Log("Llamada a ContactModel::create(\$newContact)."));
            
            ContactModel::create(
                new Contact($info["name"], $info["surname"], $info["email"], 
                    $info["message"], $info["why"], $info["device"]
                )
            );
            
            $info = true;
        }
        
        return $info;
    }
    
    private static function validate (string $str, int $type): bool {
        $abc = "abcdefghijklmnñopqrstuvwxyz";
        $til = "áéíóúàèìòù";
        $nameSpcl = "- ";
        $emailChrs = "_@.";
        $nums = "0123456789";
        
        $out = false;
        
        switch ($type) {
            case self::NAME:
                $validChars = $abc . $til . $nameSpcl;
                
                $out = true;
                break;
            case self::EMAIL: 
                $validChars = $abc . $emailChrs . $nums;
                
                $out = true;
                break;
            case self::DEVICE:
                $values = ["pc", "phone", "tablet", "other"];
                
                $out = in_array($str, $values);
                break;
            default:
                $out = false;
        }
        
        return $out;
    }
}

?>