<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <main class="main-view">
        <section class="align">
            <form class="form" action="logar.php" method="POST">
                <div class="card-top">
                    <h2>LOGIN</h2>
                </div>
                <div class="card">
                    <div class="card-group">
                        <img src="css/mail.svg" alt="">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="card-group">
                        <img src="css/lock.svg" alt="">
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="checkbox-align">
                        <input type="checkbox" name="">
                        <label>Lembre-me</label>                  
                    </div>
                    <div class="card-group btn">
                        <button type="submit">LOGIN</button>
                    </div>
                    <div class="link-create">
                        <a href="Cadastro/cadastro.php">Criar cadastro</a>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>
</html>