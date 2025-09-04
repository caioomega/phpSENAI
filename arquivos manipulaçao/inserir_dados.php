<?php
    $arquivo= fopen("dados.txt", "a");
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);

    echo "O arquivo $arquivo foi alterado com sucesso!"
    
?>