<?php

     include "funcoes.php";
     echo saudacao("Caio");


function banco_dados($db) {
    return "Conectado ao banco de dados: $db<br>";
}

function fiap($aluno1, $aluno2, $aluno3) {
    echo "<h3>Lista de alunos com observação:</h3>";
    echo "<ul>";
    echo "<li>$aluno1 - Aluno nota 10</li>";
    echo "<li>$aluno2 - Aluno nota 10</li>";
    echo "<li>$aluno3 - Aluno nota 10</li>";
    echo "</ul>";
}