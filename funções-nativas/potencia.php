<?php
    $numero = $_POST['numero'] ?? '';
    $potencia = $_POST ['potencia'] ?? '';
    //$n = 5;
    echo 'Potência: ' . pow($n,2);

?>

<form method="post">
    <label>Digite um número:</label>
    <input type="number" name="numero">
    <label>Digite a potência:</label>
    <input type="number" name="potencia">
    <input type="submit" value="Calcular">
</form>