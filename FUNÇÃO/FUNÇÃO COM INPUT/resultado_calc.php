<?php

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];


    function media($n1, $n2, $n3) {

        return ($n1 + $n2 + $n3) / 3;

     }
     echo "A média é: " . media($n1, $n2, $n3);
?>