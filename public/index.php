<?php
require_once "../app/models/persona.php";

$persona1 = new persona("Juan", "28", "jj@gmail.com", "Martinez", "3010002023");
$persona2 = new persona("Pedro","15","pp@gmail.com","Perdomo","1231564687");
// $persona1->edad="-15";
// $persona1->correo="3201511649";
// $persona1->telefono="Pereira";

$persona1->setNombre("Juan Jose");
$persona2->setEdad("30");

// echo $persona1->nombre; Error porque esta intentando acceder a algo privado



$persona1->saludar();
$persona2->saludar();

echo $persona1->getNombre()."<br>";
echo $persona2->getEdad();



?>