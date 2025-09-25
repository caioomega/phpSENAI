<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Escola Futuro!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #2b00ad 0%, #6a5af9 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
            padding: 3rem 2.5rem;
            max-width: 500px;
            text-align: center;
        }
        .logo {
            width: 120px;
            margin-bottom: 1.5rem;
        }
        h1 {
            color: #2b00ad;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            color: #444;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .btn-login {
            display: inline-block;
            padding: 1rem 2.2rem;
            background: #2b00ad;
            color: #fff;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 16px #2b00ad44;
            transition: background 0.3s, box-shadow 0.3s;
        }
        .btn-login:hover {
            background: #1a007a;
            box-shadow: 0 8px 32px #2b00ad44;
        }
        .img-ilustra {
            width: 100%;
            max-width: 320px;
            margin: 2rem auto 0 auto;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" alt="Logo Escola" class="logo">
        <h1>Escola Futuro</h1>
        <p>Bem-vindo ao portal da Escola Futuro! Aqui você pode cadastrar professores e alunos, acessar informações e fazer parte da nossa comunidade de aprendizado.</p>
        <a href="cadastro.html" class="btn-login">Login / Cadastro</a>
    </div>
</body>
</html>