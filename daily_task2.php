<?php

$a = 54;

if ($a < 45){
    echo "Index nilai anda D </br>";
    echo "Tidak Lulus";
}else if($a == 45){
    echo "Index nilai anda C </br>";
    echo "Cukup";
}else if($a > 45 && $a <= 70){
    echo "Index nilai anda B </br>";
    echo "Bagus";
}else if($a > 70){
    echo "Index nilai anda A </br>";
    echo "Lulus nilai terbaik";
}
?>