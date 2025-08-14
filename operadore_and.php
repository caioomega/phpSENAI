<?php

    $idade = 20;
    $itemCarteira = true;

    if ($idade >= 18 && $itemCarteira){
        echo "You can drive";
    }
    else{
        echo "You can't drive";
    }

    echo "<br>";
    echo "<br>";

?>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Bebas Neue", sans-serif;
        background-color: #818181ff

    }