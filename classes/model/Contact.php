<?php

class Contact {
    private $name;
    private $surname;
    private $email;
    private $message;
    private $why;
    private $device;
    
    public function __construct (string $name, string $surname, string $email, string $message, array $why, string $device) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->message = $message;
        $this->why = $why;
        $this->device = $device;
    }
    
    /* *
     * GETS
     */
    public function getName () {
        return $this->name;
    }
    
    public function getSurname () {
        return $this->surname;
    }
    
    public function getEmail () {
        return $this->email;
    }
    
    public function getMessage () {
        return $this->message;
    }
    
    public function getWhy () {
        return $this->why;
    }
    
    private function getWhyString () {
        $out = "";
        
        foreach ($this->why as $value) {
            if ($out !== "") {
                $out .= ",";
            }
            
            $out .= $value;
        }
        
        return $out;
    }
    
    public function getDevice () {
        return $this->device;
    }
    
    /* *
     * Overrides
     */
    public function __toString () {
        return "Contact from $this->name $this->surname about {$this->getWhyString()}";
    }
}

?>