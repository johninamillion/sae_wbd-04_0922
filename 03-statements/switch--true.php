<?php

switch( TRUE ) {
    case 1 < 0:
        echo "1 ist kleiner als 0 oder größer";
        breaK;
    case 1 == 0:
        echo "1 ist gleich 0";
        break;
    case 1 > 0:
        echo "1 ist größer als null";
        break;
    default:
        echo "1 ist mir unbekannt";
        break;
}