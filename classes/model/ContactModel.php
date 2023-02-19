<?php

abstract class ContactModel { // extends Model {
    private const FILE = "data/contact.xml";
    
    private function __construct () {}
    
    /* *
     * CRUD
     */
    public static function create (Contact $new) {
        LogModel::create(new Log("Metodo ContactModel::create($new)."));
        
        if (file_exists(self::FILE)) {
            $file = simplexml_load_file(self::FILE);
            
            $newContact = $file->addChild("contact");
            
            $newContact->addChild("name", $new->getName());
            $newContact->addChild("surname", $new->getSurname());
            $newContact->addChild("email", $new->getEmail());
            $newContact->addChild("message", $new->getMessage());
            $why = $newContact->addChild("why");
            
            foreach ($new->getWhy() as $value) {
                $why->addChild($value);
            }
            
            $newContact->addChild("device", $new->getDevice());
            
            file_put_contents(self::FILE, $file->asXML());
        } else {
            throw new Exception("El fichero de registro de contactos no existe.");
        }
    }
    
    private function read () {}
    
    private function update () {}
    
    private function delete () {}
}

?>