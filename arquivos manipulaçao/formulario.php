<?php 
$mensagem = "";
if(isset($_POST['nome']) && isset($_POST['numero'])){
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];

    $arquivo = fopen("Chamada.txt", "a");
    fwrite($arquivo, "Nome: $nome - Número: $numero\n");
    fclose($arquivo);

    $mensagem = "Chamada registrada com sucessop";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ler_chamada'])) {
    if(file_exists("Chamada.txt")){
        $conteudo = file_get_contents("Chamada.txt");
        $mensagem = "<strong>Chamada:</strong><br>$conteudo";
    } else {
        $mensagem = "Arquivo de chamada não encontradpo para leitura";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['limpar_chamada'])) {
    if(file_exists("Chamada.txt")){
        file_put_contents("Chamada.txt", "");
        $mensagem = "Lista de chamada limpa com sucesso!";
    } else {
        $mensagem = "Arquivo de chamada não encontrado para lista";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensagem = "Por favor, preencha todos os campos";
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body style="background: #232526; font-family: Arial, sans-serif; color: #fff; min-height: 80px margin: 0;">
    <div style="max-width:400px; margin:40px auto; background:#333; border-radius:12px; box-shadow:0 4px 16px rgba(0,0,0,0.3); padding:28px 18px;">
        <h1 style="text-align:center; margin-bottom:20px; font-size:1.7rem;">Formulário de Chamada</h1>
        <?php 
            if($mensagem) echo $mensagem; 
        ?>
        <form action="" method="post">
            <label for="nome" style="font-weight:bold; margin-bottom:6px; display:block;">Nome:</label>
            <input type="text" id="nome" name="nome" required style="width:100%; padding:8px; margin-bottom:30px; border:none; border-radius:6px; background:#222; color:#fff;">
            <label for="numero" style="font-weight:bold; margin-bottom:6px; display:block;">Número:</label>
            <input type="number" id="numero" name="numero" required style="width:100%; padding:8px; margin-bottom:14px; border:none; border-radius:6px; background:#222; color:#fff;">
            <button type="submit" style="width:100%; padding:10px; border:none; border-radius:6px; background:#dd2476; color:#fff; font-size:1rem; font-weight:bold; cursor:pointer; margin-bottom:8px;">Registrar Chamada</button>
        </form>
        <form action="" method="post">
            <input type="hidden" name="ler_chamada" value="1">
            <button type="submit" style="width:100%; padding:10px; border:none; border-radius:6px; background:#ff512f; color:#fff; font-size:1rem; font-weight:bold; cursor:pointer; margin-bottom:8px;">Ler Chamada</button>
        </form>
        <form action="" method="post">
            <input type="hidden" name="limpar_chamada" value="1">
            <button type="submit" style="width:100%; padding:10px; border:none; border-radius:6px; background:#343a40; color:#fff; font-size:1rem; font-weight:bold; cursor:pointer;">Limpar Chamada</button>
        </f
</body>
</html>