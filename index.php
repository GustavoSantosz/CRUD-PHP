<?php
    require("verifica.php");
    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
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

<?php else:header("Location: login.php"); endif; ?>