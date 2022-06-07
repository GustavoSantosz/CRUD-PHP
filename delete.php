<?php 
require 'conexao2.php';

if(!empty($_GET['id'])){
    $id = (int)$_GET['id'];
    $sql = $conn->query("SELECT * FROM usuarios WHERE idusuarios=$id");
    $qtd = $sql->fetch();

    if($qtd > 0){
        $sqlDelete = $conn->query("DELETE FROM usuarios WHERE idusuarios=$id");
    }    
    
}

header("Location: listaUsu.php");

?>