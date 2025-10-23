<?php

echo "<h2> Informações de acesso</h2>";

$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$servidor = gethostname();
$versao_php = phpversion();

echo "Seu IP: " . $ip . "<br>";
echo "Navegador: " . $navegador . "<br>";
echo "Servidor: " . $servidor . "<br>";
echo "Versão do PHP: " . $versao_php;
?>
