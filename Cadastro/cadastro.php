<?php 

require 'conexao.php';

$id = (int)$_GET['id'];

$stmt = $conn->prepare('SELECT * FROM usuarios WHERE idusuarios = :id');
$stmt->bindParam(":id", $id);
$stmt->execute();
$qtd = $stmt->fetch();

if($qtd >= 0){

    if($id > 0){

        $nome = $qtd['nome'];
        $email = $qtd['email'];
        $senha = $qtd['senha'];

    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleC.css">
    <title>Cadastro</title>
</head>
<body>
<?php
    require'dados.php';
?>
    <main >

        <section class="create-bottom">

            <div class="card-register">

            <?php $id = (int)$_GET['id']; if($id == 0){?>

                    <h2>CADASTRO</h2>

                    <?php }else{?>

                        <h2>Editar</h2>

                        <?php }?>

                <form class="form-register" method="POST">

                    <div class="input-register">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" value="<?php 
                        if($id == 0){
                        }else{
                            echo $nome;
                        }
                        ?>" placeholder="Digite seu nome.">
                    </div>

                    <div class="input-register">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php 
                        if($id == 0){
                        }else{
                            echo $email;
                        }
                        ?>" placeholder="Digite seu email.">
                    </div>

                    <div class="input-register">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" value="<?php 
                        if($id == 0){
                        }else{
                            echo $senha;
                        }
                        ?>" placeholder="Digite sua senha.">
                    </div>
                    <?php $id = (int)$_GET['id']; if($id == 0){?>
                    <button type="submit?id=0">CADASTRAR</button>
                    <?php }else{?>
                    <button type="update">SALVAR</button>
                    <?php }?>

                </form>

            </div>

        </section>

    </main>

</body>

<html>