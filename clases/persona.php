<?php
class persona{
    private $nombre;
    private $edad;
    private $correo;
    private $apellido;
    private $telefono;

    public function __construct($nombre, $edad, $correo, $apellido, $telefono) {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->correo=$correo;
        $this->apellido=$apellido;
        $this->telefono=$telefono;

    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function setCorreo($correo){
        $this->correo=$correo;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function saludar(){
        echo "Hola mi nombre es: ".$this->nombre." ".$this->apellido. " tengo ".$this->edad." mi correo es ".$this->correo." y mi telefono es ".$this->telefono."<br>";
    }

}
?>