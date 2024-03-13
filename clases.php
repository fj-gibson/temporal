<?php 

class Animal{
  public $numero_de_patas;

  public function __construct($patas){
        $this->numero_de_patas = $patas;    
    }
}

class Perro extends Animal{

    public function __construct($patas){
        parent::__construct($patas);        
    }

}

$perro = new Perro(2);
