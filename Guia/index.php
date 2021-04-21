<?php

//Código creado por José Luis Melchor Estrada 4A Programación

$x=5;
$xtotal=5;
$x1=5;
$y=6;
$ytotal=6;
$z=10;
$ztotal=10;
$z1=10;
print("<h2>1.- Resuelve las siguientes operaciones con desglose de operaciones</h2>");

$rest= $x += $y;

print("a) Si tengo $xtotal += $y entonces será: <br> ");
print("R=$rest<br>");

$rest1= $z-=$y;

print("<br>b) Si tengo $ztotal -= $y entonces será: <br> ");
print("R=$rest1<br><br>");

print("c) Si tengo $ztotal > $xtotal entonces el resultado es: <br>");
$rest2=  $ztotal>$xtotal;

if( $rest2 == true){
    print("R=Es correcto<br><br>");
}else{
    print ("R=Es incorrecto<br><br>");
}

print("d) Si tengo $ytotal > $ztotal entonces el resultado es: <br>");
$rest2=  $ytotal>$ztotal;

if( $rest2 == true){
    print("R=Es correcto<br><br>");
}else{
    print ("R=Es incorrecto<br><br>");
}

//Cierre de act 1

print("<h2>2.- Modificar el código para que el acceso sea denegado y que necesito para que la clave
ahora sea 15</h2>");

print("Si 15 es completamente igual a 8<br><br>");

$p=15;

if($p==8){
    print("R= Acceso Concedido");
}else{
    echo"R= Acceso denegado";
}
print("<br>");

//Cierre de la act 2

print("<h2>3.- Del siguiente código, cual valor en la declaración de volvo corresponde a las ventas</h2>");

$autos = array (
    array ("Volvo",22,18),
    array ("BMW",25,13),
    array ("Ferrari",5,2),
    array ("Jaguar",17,15)
);

echo $autos[0][0].": En almacén " .$autos[0][1]. "-- Vendidos ". $autos[0][2]."<br>";
echo $autos[1][0].": En almacén " .$autos[1][1]. "-- Vendidos ". $autos[1][2]."<br>";
echo $autos[2][0].": En almacén " .$autos[2][1]. "-- Vendidos ". $autos[2][2]."<br>";
echo $autos[3][0].": En almacén " .$autos[3][1]. "-- Vendidos ". $autos[3][2]."<br>";

print("<br>R= El valor numero 2 del primer arreglo dando como resultado 18");

//Cierre de la act 3

print("<h2>4.- Modificar el código para que la condición no se cumpla</h2>");

$a=5;
$b=10;
$result = ($a <= 4 && $b <>9);

print("<h4> Si 5 <= 4 y 10 es mayor o menor que 9 entonces:</h4>");

if($result==true) {
    echo "R= Se cumple la condición";
}
else{
    echo"R= No se cumple la condición";
}

//Cierre de la act 4

print("<h2>5.- Modificar el código para que el código considere que la edad sea de 10 y 14</h2>");

$t=12;

print("Si digo que mi edad es $t entonces:<br><br>");

if($t <10 and $t>0){
    print("Está entre el 1 y el 9");
}elseif($t<=14 and $t>=10){
    print("Está entre el 10 y 14");
}else{
    print("Al parecer es mayor o igual de 15");
}
//Cierre de la act 5

print("<h2>6.- Modificar el código para que la numeración nos de los resultados 1 6 11 17...hasta
ser menor a 50 </h2>");

print("Si digo que 1 debe ser menor a 50 pero se va a ir sumando en 5 en 5.<br><br>Entonces mis números son:<br><br>");

for($i=1;$i<50; $i+=5){
    print("$i ");
}
echo".";
//Cierre de la act 6 

print("<h2>7.- Modificar el código para que en vez de agregar el apellido, agregar la edad </h2>");

function edad($nombre, $edad){
    print("<br>Me llamo $nombre mi edad es $edad<br>");
}

edad("Luis","18");
edad("Alicia","15");
edad("Maricarmen","20");


?>