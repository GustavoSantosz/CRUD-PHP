<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleC.css">
    <title>Cadastro</title>
</head>
<body>
<?php
    require'dados.php';
?>
    <main >

        <section class="create-bottom">

            <div class="card-register">

                    <h2>CADASTRO</h2>

                <form class="form-register" method="POST">

                    <div class="input-register">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome.">
                    </div>

                    <div class="input-register">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Digite seu email.">
                    </div>

                    <div class="input-register">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha.">
                    </div>

                    <button type="submit">CADASTRAR</button>

                </form>

            </div>

        </section>

    </main>

</body>

<html>