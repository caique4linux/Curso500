<?php

$media = 7;

switch ($media) {
    case 10:
        echo "Você arrasou! ";
    case 9:
    case 8:
    case 7:
    case 6:
        echo "Parabens!";
        break;
    case 5:
    case 4:
        echo "Recuperação!";
        break;
    case 3:
    case 2:
    case 1:
        echo "Reprovado!";
        break;
    case 0:
        echo "Nota horrorosa!";
        break;
    default:
        echo "Nota impossível!";
}