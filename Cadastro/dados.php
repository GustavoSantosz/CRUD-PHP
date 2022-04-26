<?php

require ('conexao.php');
global $conn;

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $dtcadastro = date("Y-m-d H:i:s");

    $stmt = $conn->query("SELECT email FROM usuarios WHERE email = '{$email}'");

    if($stmt->rowCount() > 0){

        echo '<div class="existe">'."Usuario ja existe".'</div>';

    }else{

        $sql = $conn->prepare("INSERT INTO usuarios (nome, email, senha, dtcadastro) VALUES (:nome, :email, :senha,'{$dtcadastro}')");

        $sql->bindParam(":nome", $nome, PDO::PARAM_STR);
        $sql->bindParam(":email", $email, PDO::PARAM_STR);
        $sql->bindParam(":senha", $senha, PDO::PARAM_STR);

        $nomee = $nome;
        $emaill = $email;
        $senhaa = $senha;
        $dtcadastroo = $dtcadastro;

        $sql->execute();

        echo 'Usuário cadastrado com sucesso';

    }
    
}

?>