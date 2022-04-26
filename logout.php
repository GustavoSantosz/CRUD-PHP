<?php

require'conexao2.php';

unset($_SESSION['idUser']);
session_destroy();
header("Location: login.php");

?>