<form method="post">
<label>Digite um número:</label>
<input type="number" name="n">
<input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST["n"])) {
$n = $_POST["n"];
echo "Potência (n2): " . pow($n,2) . "<br>";
echo "Raiz quadrada: " . sqrt($n) . "<br>";
echo "Valor absoluto: " . abs($n) . "<br>";
}
?>

<?php
date_default_timezone_set("America/Sao_Paulo");
echo "Data atual: " . date("d/m/Y") . "<br>";
echo "Hora atual: " . date("H:i:s") . "<br>";
echo "Daqui a 7 dias: " . date("d/m/Y", strtotime("+7 days"));
?>

<?php
echo "Seu IP: " . $_SERVER["REMOTE_ADDR"] . "<br>";
echo "Navegador: " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
echo "Servidor: " . gethostname() . "<br>";
echo "Versão do PHP: " . phpversion();
?>

