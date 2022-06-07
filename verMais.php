<?php 

require 'conexao2.php';

$id = $_GET['id']; 

$sql = $conn->prepare("SELECT * FROM usuarios");
$sql->execute();

echo ($id);

?> 