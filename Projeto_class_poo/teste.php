<?php

    require_once 'Usuario.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';

    $professor = new Professor("caio mega", "caio#gmail.com", "Matemática");
    $professor2 = new Professor("Bruno Silva", "bruno@gmail.com", "História");

    $aluno = new Aluno("Ana Silva", "ana#gmail.com", "2023001");
    $aluno2 = new Aluno("Carlos Souza", "carlos@gmail.com", "2023002");


    echo "<h2>Professores</h2>";
    echo $professor->exibirInfo() . "<br>";
    echo $professor->darAula() . "<br><br>";

    echo $professor2->exibirInfo() . "<br>";
    echo $professor2->darAula() . "<br><br>";

    echo "<h2>Alunos</h2>";
    echo $aluno->exibirInfo() . "<br>";
    echo $aluno->estudar() . "<br><br>";
    echo $aluno2->exibirInfo() . "<br>";
    echo $aluno2->estudar() . "<br><br>";
    
?>