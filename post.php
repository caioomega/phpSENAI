<?php

        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $sinal  = $_POST['sinal'];

        $resultado = $valor1.$sinal.$valor2;
        echo $resultado;

        if($sinal == "*"){
            echo $valor1 * $valor2;            
        }   
        if($sinal == "+"){
            echo $valor1 + $valor2;            
        }   



?>