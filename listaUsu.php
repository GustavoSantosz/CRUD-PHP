<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Lista de usuários</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="Cadastro/cadastro.php?id=0">Cadastro</a>
        <a class="nav-link" href="index.php?id=0">Voltar</a>
    </div>
    </div>
</div>
</nav>
<br>
<br>

<?php 
    
require 'conexao2.php';

$stmt = $conn->prepare('SELECT * FROM usuarios');
$stmt->execute();
$qtd = $stmt->fetch();

if($qtd >= 0){

    print "<table class='table table-hover table-striped table-bordered bg-dark'>";

        print "<tr>";
        print "<th style='color: white;'>#</th>";
        print "<th style='color: white;'>Nome</th>";
        print "<th style='color: white;'>Ações</th>";
        print "</tr>";

    while($row = $stmt->fetch()){
        print "<tr>";
        print "<td style='color: white;'>".$row['idusuarios']."</td>";
        print "<td style='color: white;'>".$row['nome']."</td>";
        print "<td>

        <button onclick=\" location.href='Cadastro/cadastro.php?id=".$row['idusuarios']."';\" class='btn btn-primary'>Editar</button>
        <button onclick=\" location.href='delete.php?id=".$row['idusuarios']."';\" class='btn btn-danger'>Excluir</button>
        
        
        </td>";
        print "</tr>";
    }
    print "</table>";

}else {
    echo "Usuário não encontrado";
}
    
    
?>


</body>
</html>