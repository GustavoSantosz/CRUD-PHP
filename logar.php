<?php
//Recebendo os dados do formulário.
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require'conexao2.php';
    require'Usuario.php';

    $u = new Usu();

    //Pegando os dados via $_POST e armazenando em uma var
    $email = Util::AntiInjector($_POST['email']);
    $senha = Util::AntiInjector($_POST['senha']);

    //Executando o metodo login
    //E logando o usuario para a pagina inicial do sistema 'index.php'

    if($u->login($email, $senha) == true){  
        if(isset($_SESSION['idUser'])){

            header("Location: index.php");
            
        }else{

            header("Location: login.php");

        }
        
    }else{
        header("Location: login.php");
    }

}else{
    header("Location: login.php");
}

?>