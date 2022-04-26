<?php

require'conexao2.php';

$sql = $conn->prepare("SELECT * FROM usuarios");
$sql->execute();

$results = $sql->fetchAll();

foreach ($results as $key => $value) {
    echo $value['idusuarios']. ' | ' . $value['nome']. ' | ' .$value['email'];
    echo '<hr>';
}

?>

<a href="index.php">VOLTAR</a>