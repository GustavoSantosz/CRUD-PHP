<?php
    require("conexao2.php");
    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){

        require_once("Usuario.php");

        $u = new Usu();

        $adm = $_SESSION['idUser'][1];
        $nome = $_SESSION['idUser'][0];

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
    <title><?php echo $nome; ?></title>
</head>
<body>

    <?php if($adm):?>

        <div class="user">
            <a href="listaUsu.php" style="color: black;">VER USUARIO</a>
        </div>

    <?php endif;?>

        <main>
            <section class="view">
                <div class="card-center">
                    <div class="bottom-color">
                    <p class="bv">Bem-vindo <?php echo $nome; ?></p>
                    </div>
                      <a href="logout.php"><button>SAIR</button></a>
                </div>
            </section>
        </main>

</body>
</html>