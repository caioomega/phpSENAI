<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%); height: 100vh; margin: 0; font-family: Arial, Helvetica, sans-serif; display: flex; align-items: center; justify-content: center;">
    <form action="login.php" method="post"
        style="
            background: #fff;
            padding: 32px 28px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 300px;
        ">
        <h2 style="margin-bottom: 24px; color: #2d3e50;">Login</h2>
        <input type="text" name="usuario" placeholder="Usuário"
            style="
                width: 100%;
                padding: 10px;
                margin-bottom: 14px;
                border: 1px solid #bfc9d4;
                border-radius: 8px;
                font-size: 16px;
                outline: none;
                transition: border 0.2s;
            "
            onfocus="this.style.borderColor='#6c63ff'"
            onblur="this.style.borderColor='#bfc9d4'"
        >
        <input type="password" name="senha" placeholder="Senha"
            style="
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #bfc9d4;
                border-radius: 8px;
                font-size: 16px;
                outline: none;
                transition: border 0.2s;
            "
        >
        <button type="submit"
            style="
                background: linear-gradient(90deg, #6c63ff 0%, #48c6ef 100%);
                color: #fff;
                border: none;
                border-radius: 8px;
                padding: 10px 0;
                width: 100%;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
                box-shadow: 0 2px 8px rgba(76, 110, 245, 0.08);
                transition: background 0.2s;
            "
            
        >Login</button>
        <?php
            if (isset($_GET['msg'])) {
                echo "<p style='color: red; margin-top: 18px;'>" . htmlspecialchars($_GET['msg']) . "</p>";
            }
        ?>
    </form>
</body>
</html>