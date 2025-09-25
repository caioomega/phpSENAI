<?php

require_once 'Usuario.php';
require_once 'Aluno.php';
require_once 'Professor.php';

$banco = 'banco.json';

$dados = [];
if (file_exists($banco)) {
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}

$tipo = $_POST['tipo'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($tipo === 'professor') {
    $disciplina = $_POST['disciplina'] ?? '';
    $professor = new Professor($nome, $email, $disciplina);
    $dados[] = [
        'tipo' => 'professor',
        'nome' => $professor->getNome(),
        'email' => $professor->getEmail(),
        'disciplina' => $professor->getDisciplina()
    ];
} elseif ($tipo === 'aluno') {
    $matricula = $_POST['matricula'] ?? '';
    $aluno = new Aluno($nome, $email, $matricula);
    $dados[] = [
        'tipo' => 'aluno',
        'nome' => $aluno->getNome(),
        'email' => $aluno->getEmail(),
        'matricula' => $aluno->getMatricula()
    ];
}

file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Salvos</title>
    <style>
        body {
            background: #2b00ad;
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
            text-align: center;
        }
        h2 {
            color: #2b00ad;
            margin-bottom: 1.5rem;
        }
        a {
            display: inline-block;
            margin: 0.5rem 1rem;
            padding: 0.7rem 1.2rem;
            background: #2b00ad;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s, box-shadow 0.3s;
        }
        a:hover {
            background: #1a007a;
            box-shadow: 0 4px 16px #2b00ad44;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dados salvos com sucesso!</h2>
        <a href="cadastro.html">Voltar</a>
        <a href="index.php">Ver Usuários</a>
    </div>
</body>
</html>