<?php

//em PHP uma função é um bloco de código que reaiza uma tarefa específica de e pode ser reutilizado em diferentes partes de um programa.
//Funções ajudam a organizar o código, melhorar a legibilidade e facilitar a manutenção.
//Funções podem receber parâmetros de entrada e retornar valores de saída.
//Definição de uma função -> "function nomeDaFuncao(parametros){bloco de código}"

    function saudacao($nome){
        return "Olá, $nome!<br>";
    }
        echo saudacao("Caio");

?>


<?php
//função com varios parâmetros e retorno de valor

    fuction $soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
    }
    echo soma(5, 3); // Saída: 8
?>


<?php
$frase = saudacao("Caio");
$soma = soma(10, 20);
echo "$frase A soma é: $soma";
?>