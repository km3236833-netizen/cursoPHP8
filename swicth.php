<?php 
// es una estrura de control multicasos 

$dianumero =3;
switch ($dianumero) {
    case 1:
        # codigo 
        echo "lunes";
        break;// aqui termine 
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    case 4:
        echo "jueves ";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "domingo";
        break;
    default:
        echo "error de dia";
        break;
}
?>
