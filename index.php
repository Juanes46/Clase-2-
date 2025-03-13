<?php 
echo " Hola mundo !!! ";     /* Generar nuestra estructura de datos*/
echo '<br>';
echo " Hola mundo !!! ";

$nombre ='Pepe';
$apellido = "Gomez";
echo '<br> Hola ' . $nombre . ' ' . $apellido;
echo "<br> Hola $nombre $apellido";
$edad = 25;
$estatura = 1.75;
$mayorEdad = true; //false
/**
 * Bloque.....
 */

$prueba = null;
$prueba = array(1,2,3,4,5,6);
$prueba = [1,2,3,4,5,6];
$prueba = [1,2.6,3,true,5,"a"];
echo '<br>'. $prueba[2];

$persona = [
    "nombre" => "Pepe",
    "apellido" =>"Gomez",
    "edad" => 30,
    "numerosSuerte" => [20,12,6],
];
echo '<br>' . $persona['nombre'];

$numeros = [1,2,3,4,5,6,7,8,9,10,11,12];

for($i=0; $i<=11; $i++) {
    $parOImpar ="";
    if(($numeros[$i]%2)==0){
        $parOImpar = "Par";
    }else{
        $parOImpar="Impar";
    }
    echo "<br>$numeros[$i] es $parOImpar";
}

$i=0;
$estado = true;
while($estado){
    if($i==1){
        $i++;
        continue;
    }
    $parOImpar ="";
    if(($numeros[$i]%2)==0){
        $parOImpar = "Par";
    }else{
        $parOImpar="Impar";
    }
    echo "<br>$numeros[$i] es $parOImpar";
    $i++;
    if($i==12){
        $estado = false ; 
        //break; 
    }
}

$i = 0 ;
do{
    $parOImpar ="";
    if(($numeros[$i]%2)==0){
        $parOImpar = "Par";
    }else{
        $parOImpar="Impar";
    }
    echo "<br>$numeros[$i] es $parOImpar";
    $i++;
}while($i<12);


foreach($numeros as $n){
    $parOImpar ="";
    if(($n % 2)==0){
        $parOImpar = "Par";
    }else{
        $parOImpar="Impar";
    }
    echo "<br>$numeros[$i] es $parOImpar";

}
foreach($numeros as $i => $n){
    $parOImpar ="";
    if(($n % 2)==0){
        $parOImpar = "Par";
    }else{
        $parOImpar="Impar";
    }
    echo "<br>$i : $n es $parOImpar";
}

/**
 * Expresiones booleanas 
 * && and
 * || or
 * ! negacion 
 * < menor que 
 * > mayor que 
 * >= Mayor o igual 
 * <= Menor o igual 
 * != diferente 
 * == igual que 
 */

 if($numeros[0]==0 && $numeros[0]<10){
    ////
 }elseif($numeros [0] == 10 || $numeros[0] < 20 ){
    ////
 }else if ($numeros == 20 && $numeros[0]<=30){
    ////
 }


 $catg = 'a';

 switch($catg){
    case 'a':
        ///
        break;
    case 'b':
        ///
        break;
    case 'c':
            ///
        break;
    default:
        ///
        break;
 }

 // Funcion : Es un bloque de codigo que hace algo Que llega a tener parametros de entrada que teniendo estos paramatros y pueden generar una salida 

 function saludar($nombre){
    echo "<br>Hola $nombre";
 }

 saludar("Pepe");
 
 function getSaludo($nombre){
    return "<br>Hola $nombre";
 }
 echo getSaludo("Ana");

 function saludarDos(string $nombre, $apellido){
    echo "<br>Hola $nombre $apellido";
 }

saludarDos("Pepe", 'Gomez');
saludar("Pepe","Gomez");
saludarDos("Pepe",12);
saludarDos(12,12);

function saludarTres($nombre, $apellido=null){
    echo "<br>Hola $nombre $apellido";
 }
saludarTres("Ana");
saludarTres("Ana", "Gomez");

function saludarCuatro(...$args){
    $nombre = $args[0];
    $apellido = empty($args[1]) ? '' : $args[1];
    echo "<br>Hola $nombre $apellido";

 }
 saludarCuatro("Pedro");
 saludarCuatro('Pedro',"Picapiedra");
 saludarCuatro('Pedro',"Picapiedra",40);
 saludarCuatro('Pedro',"Picapiedra",40,[1,2,3,4]);
 saludarCuatro('Pedro',"Picapiedra",40,[1,2,3,4],true);
// saludarCuatro(true,'Pedro',"Picapiedra",40,[1,2,3,4]);
// Como crear variables , estructuras 

define("MICONSTANTE", "Prueba");
echo MICONSTANTE;

//Como crear clase en php 
//Clases tienen propiedades atributos 
class PersonaEstudiantes{
    private $nombre = null;
    private $apellido;

    function getNombre(){
        return $this -> nombre;
    }
    function setNombre($val){
        $this->nombre = $val;
    }
}

$persona = new PersonaEstudiantes();
$persona->setNombre("Pablo");
echo "<br>".$persona->getNombre();



//get devolver valor propiedad lectura 
//set asignar valor a mi propiedad escritura 
//----------------------------------------------------------
//objeto instancia de una clase
//atributos representan caracteristicas o partes de un obj real 
//Metodos son acciones 
//Principios 
//1.Encapsulamiento,2.Polimorfismo,3.Herencia,4.Abstraccion
//Abstraccion : Procesos que hace de tomar objeto real y representarlo en clases 
//Herencia : Clase padre que hereda atributos a una clase hija 
//Encapsulamiento : Proteja sus datos y propiedades para que no salgan de sus clases y para hacerlos debe usar metodos , modificadores de acceso .
//Private, Public , Protected
//Polimorfismo : 
?>
