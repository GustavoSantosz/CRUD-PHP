<?php

//Classe para validar os dados

class Usu{
//Passando como parametros no metodo as variaveis de 'logar.php'
    public function login($email, $senha){

        global $conn;

        $sql = "SELECT * FROM usuarios WHERE email = :email";

        $sql = $conn->prepare($sql);
        $sql->bindValue("email", $email);
    
        $sql->execute();
    
        //Contando quantos registros existem no banco. Retorna o numero de linhas.
        if($sql->rowCount() > 0){
            
            $results = $sql->fetchAll(PDO::FETCH_ASSOC)[0];
    
            if(password_verify($senha, $results['senha']) == true) {

                //Criando a sessão no sistema para o usuario;
                session_start();

                $_SESSION['idUser'] = array($results['nome'], $results['adm']);

                return true;
            } else {
                return false;
            }

        }else{
            return false;
        }
    
    }
}

?>