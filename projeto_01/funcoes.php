<?php

    function conecta($usuario, $senha) {
        if($usuario === "admin" && $senha === "1234") {
            header("location: painel.html");
            exit;

        } else {
            $msg = urlencode("<span>Usuário ou senha inválidos</span>");
            header("location: index.php?msg=$msg");
            exit;
            
    }
    }
?>
