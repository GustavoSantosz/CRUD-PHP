<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main class="main-view">
            <form class="form-container" action="logar.php" method="POST">
                <div class="card-top">
                    <h2>LOGIN</h2>
                </div>
                <div class="card">
                    <div class="card-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="card-group">
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="card-group btn">
                        <button type="submit">LOGIN</button>
                    </div>
                    <div class="link-create">
                        <a href="Cadastro/cadastro.php">Criar cadastro</a>
                    </div>
                </div>
            </form>
    </main>
</body>
</html>