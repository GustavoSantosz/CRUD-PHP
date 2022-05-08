<?php
    require("conexao2.php");
    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){

        require_once("Usuario.php");

        $u = new Usu();
        $usuarioLogado = $u->logged($_SESSION['idUser']);
        $nomeUser = $usuarioLogado['nome'];

    }else{

        header("Location: login.php");

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <main>
            <section class="view">
                <div class="card-center">
                    <div class="bottom-color">
                    <p class="bv">Bem-vindo <?php echo $nomeUser; ?></p>
                    </div>
                    <div class="comand">
                        <div class="sair">
                            <a href="logout.php">SAIR</a>
                        </div>
                        <div class="user">
                            <a href="listaUsu.php">VER USUARIO</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

</body>
</html>