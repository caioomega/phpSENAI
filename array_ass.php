<?php

    $pessoa = ["Nome" => "João", "idade" => 30];
    echo $pessoa["Nome"]

?>

<p>Ola</p>

<?php

    $aluno = ["nome" => "francisco", "idade" => 16, "nota" => 100];
    $ano_atual = date('Y'); //fornece o ano atual (data do servidor definido)
    $ano = $ano_atual - $aluno["idade"];
    echo "Ola $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota] <br>";
    echo "<p> Você nasceu em $ano </p>";

    $hoje = date('d-m-y');
    echo "Hoje  é $hoje";

    $hora = date(' h:m ');

    $dia = date(' j ');
    echo "<p> Hoje, $dia é dia nacional da habitação </p>";

    echo "São exatamente $hora";
?>