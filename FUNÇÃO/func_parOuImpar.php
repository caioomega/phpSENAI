<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H2 style = "color: red;">digite um numero e verifique se ele é par ou impar</H2>

    <form action="" method="get">
        <label for="num">Numero:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="verificar">
    </form>
</body>
</html> 

<?php

    $num = $_GET['num'];

function parOuImpar($num){
    if($num % 2 == 0){
        return "par";
    } else {
        return "impar";
    }
}
echo parOuImpar($num);
?>
