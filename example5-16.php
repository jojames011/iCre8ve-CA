<?php

/**
 * @author 
 * @copyright 2018
 */
$object = new User;
$object->password = "secret";

echo $object->get_password();

class User{
    public $name, $password;
    
    function get_password()
    {
        return $this->password;
    }
}

?>