<?php

    function banco_dados($db) {
        return "Seu banco de dados, $db, foi conectado com sucsso!";

    }

    function fiap($aluno1, $aluno2, $aluno3, $observacao) {
    echo "<h3>Lista de alunos com observação:</h3>";
    echo "<ul>";
    echo "<li>$aluno1</li>";
    echo "<li>$aluno2</li>";
    echo "<li>$aluno3</li>";
    echo "</ul>";
    echo "Esses alunos receberam FIAP por $observacao";
}


?>