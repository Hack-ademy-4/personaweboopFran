<?php

class Persona {
// propiedades
private $nombre;
private $apellido;
private $edad;
// metodos
public function __construct($n,$a,$e) {
        $this->nombre = $n;
        $this->apellido = $a;
        $this->edad = $e;
  }

public function presentate(){
        echo "Hola soy $this->nombre $this->apellido y tengo $this->edad\n";
    }
public function fullName()
    {
        return "$this->nombre $this->apellido";
        
    }
}