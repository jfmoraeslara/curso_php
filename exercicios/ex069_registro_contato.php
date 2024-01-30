<?php

class Contato {

    public $name;
    private $email;
    private $phone;

    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }    
   
}

$maria = new Contato("Maria", "maria@gmail.com", 9090909090);
echo "Nome: " . $maria->getName() . "<br>";
echo "Email: " . $maria->getEmail() . "<br>";
echo "Telefone: " . $maria->getPhone() . "<br>";

?>