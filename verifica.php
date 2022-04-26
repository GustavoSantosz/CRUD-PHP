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