<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form mehtod='get'>
        <label>Digite uma palavra</label>
        <input type="text" name="txt">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>


<?php

    $txt = $_GET["txt"] ?? "arara";

    $txt_inve = strrev($txt);

    if ($txt = $txt_inve) {
        echo "A palavra $txt é um palíndromo";
    } else {
        echo "A palavra $txt não ////é um palíndromo";
    }
?>