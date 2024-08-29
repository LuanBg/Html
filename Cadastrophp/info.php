<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta> <http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <main>
    <?php
    $n = $_GET["nome"];
    $e = $_GET["email"];

    echo"É um prazer ter você aqui $n $e !";
    ?>
    
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>

    <div class="wrapper">
        <form action="">
            <h1>Cadastro de Usuário</h1>
            <div class="input-box">
                <input type="text" placeholder="Nome Completo" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirmar Senha" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Lembre-me</label>
                <a href="#">Esqueceu a senha?</a>
            </div>
            <div class="btns">
            <button type="submit" class="btn1">Enviar</button>
            <button type="to-clean" class="btn2">Limpar</button>
            </div>
            <div class="register-link">
                <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>