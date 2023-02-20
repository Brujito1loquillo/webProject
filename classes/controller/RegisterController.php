<?php

abstract class RegisterController { // extends Controller {
    private const EMAIL = 0;
    // private const PASSWD = 1;
    private const NAME = 2;
    private const SURNAME = 2;
    private const BIRDTH = 3;
    private const GENDER = 4;
    
    private const ADR =5;
    private const PCODE = 6;
    private const LOC = 7;
    private const PROV = 8;
    private const PHONE = 9;
    
    private const IMG = 10;
    
    private function __construct () {}
    
    public static function show (array $args = null) {
        LogModel::create(new Log("Metodo RegisterController:show()."));
        
        LogModel::create(new Log("Llamada a RegisterView->show()"));
        $view = new RegisterView();
        
        if (!is_null($args)) {
            $info = self::checkData($args, $view);
            if (isset($info["errors"])) {
                var_dump($info["errors"]);
            }
            
            $view->show($info);
        } else {
            $view->show();
        }
    }
    
    private static function checkData (array $args, RegisterView $view) {
        $info = []; $info["data"] = []; $info["errors"] = [];
        $lang = $view->getLang();
        $text = $lang["practics"][7]["ufs"][1]["exs"]["08"]["text"]["errors"];
        
        /* *
         * USERNAME
         */
        $username = trim($args["username"]);
        
        if ($username !== "") {
            if (self::validate($username, self::EMAIL)) {
                $info["data"]["username"] = $username;
            } else {
                $info["errors"]["username"] = $text["bUsername"];
            }
        } else {
            $info["errors"] = $text["vUsername"];
        }
        
        /* *
         * PASSWD && PASSWD2
         */
        $passwd  = trim($args["passwd"]);
        $passwd2 = trim($args["passwd2"]);
        
        if ($passwd !== "" && $passwd2 !== "") {
            if ($passwd === $passwd2) {
                $info["data"]["passwd"] = $passwd;
            } else {
                $info["errors"]["passwd"] = $text["bPasswd"];
            }
        } else {
            $info["errors"]["passwd"] = $text["vPasswd"];
        }
        
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
         * BIRDTH
         */
        $birthd = trim($args["birth"]);
        
        if ($birthd !== "") {
            if (self::validate($birthd, self::BIRDTH)) {
                $info["data"]["birthd"] = $birthd;
            } else {
                $info["errors"]["birthd"] = $text["bBirthd"];
            }
        } else {
            $info["errors"]["birthd"] = $text["vBirthd"];
        }
            
        /* *
         * GENDER
         */
        $gender = trim($args["gender"]);
        
        if($gender !== "") {
            if (self::validate($gender, self::GENDER)) {
                $info["data"]["gender"] = $gender;
            } else {
                $info["errors"]["gender"] = $text["bGender"];
            }
        } else {
            $info["errors"]["gender"] = $text["vGender"];
        }
        
        /* *
         * ADR
         */
        $adr = trim($args["adr"]);
        
        if (self::validate($adr, self::ADR)) {
            $info["data"]["adr"] = $adr;
        } else {
            $info["errors"]["adr"] = $text["bAdr"];
        }
        
        /* *
         * PCODE
         */
        $pcode = trim($args["pcode"]);
        
        if (self::validate($pcode, self::PCODE)) {
            $info["data"]["pcode"] = $pcode;
        } else {
            $info["errors"]["pcode"] = $text["bPcode"];
        }
        
        /* *
         * LOC
         */
        $loc = trim($args["loc"]);
        
        if (self::validate($loc, self::LOC)) {
            $info["data"]["loc"] = $loc;
        } else {
            $info["errors"]["loc"] = $text["bLoc"];
        }
        
        /* *
         * PROV
         */
        $prov = trim($args["prov"]);
        
        if (self::validate($prov, self::PROV)) {
            $info["data"]["prov"] = $prov;
        } else {
            $info["errors"]["prov"] = $text["bProv"];
        }
        
        /* *
         * PHONE
         */
        $phone = trim($args["phone"]);
        
        if (self::validate($phone, self::PHONE)) {
            $info["data"]["phone"] = $prov;
        } else {
            $info["errors"]["phone"] = $text["bPhone"];
        }
        
        // Si no hay ningun error
        
        /* *
         * IMG
         */
        if (count($info["errors"]) === 0) {
            if (isset($_FILES["img"])) {
                if (self::validate(null, self::IMG)) {
                    if (is_dir("img/usr_uploads")) {
                        $milli = self::milli();
                    
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $newName = "img/usr_uploads/$milli-{$_FILES["img"]["name"]}")) {
                            unset ($_FILES);
                            $info["data"]["img"] = $newName; 
                        } else {
                            $info["errors"]["img"] = $text["eImg"];
                        }
                    } else {
                        $info["errors"]["img"] = $text["dImage"];
                    }
                } else {
                    $info["errors"]["img"] = $text["bImg"];
                }
            } else {
                $info["errors"]["img"] = $text["vImg"];
            }
        }
        
        /* *
         * PERSISTENCIA
         */
        if (count($info["errors"]) === 0) {
            // header("Location: ?");
            var_dump($info["data"]);
        }
        
        return $info;
    }
    
    private static function validate ($str, int $type): bool {
        $abc = "abcdefghijklmnñopqrstuvwxyz";
        $til = "áéíóúàèìòù";
        $nameSpcl = "- ";
        $emailChrs = "_@.";
        $nums = "0123456789";
        
        $out = false;
        
        switch ($type) {
            case self::EMAIL:
                $validChars = $abc . $emailChrs . $nums;
                
                $out = true;
                break;
            case self::NAME:
                $validChars = $abc . $til . $nameSpcl;
                
                $out = true;
                break;
            case self::BIRDTH:
                $out = true;
                break;
            case self::GENDER:
                $out = true;
                break;
            case self::ADR:
                $out = true;
                break;
            case self::PCODE:
                $out = true;
                break;
            case self::LOC:
                $out = true;
                break;
            case self::PROV:
                $out = true;
                break;
            case self::PHONE:
                $out = true;
            case self::IMG:
                // $out = true;
                if (fnmatch("image/*", $_FILES["img"]["type"])) {
                    $mbInBytes = 1000000;
                    
                    if ($_FILES["img"]["size"] <= $mbInBytes * 2) {
                        $out = true;
                    }
                }
                break;
            default:
                $out = false;
        }
        
        return $out;
    }
    
    private static function milli () {
        $mt = explode(' ', microtime());
        return intval( $mt[1] * 1E3 ) + intval( round( $mt[0] * 1E3 ) );
    }
}

?>