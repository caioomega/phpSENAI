<?php

    $hoje = new DateTime("");
    $nata = new DateTime("2025-12-25");
    $diferenca = $hoje->diff($nata);
    echo "Faltam ".$diferenca->days." dias para o Natal.";