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
            
            $results = $sql->fetch();
    
            if(password_verify($senha, $results['senha']) == true) {
                //Criando a sessão no sistema para o usuario;
                $_SESSION['idUser'] = $results['idusuarios'];
                return true;
            } else {
                return false;
            }

        }else{
            return false;
        }
    
    }

    public function logged($id){

        global $conn;

        $array = array();

        $sql = "SELECT nome FROM usuarios WHERE idusuarios = :idusuarios";
        $sql = $conn->prepare($sql);
        $sql->bindValue("idusuarios", $id);
        $sql->execute();

        //Verificando se existe o id.
        if($sql->rowCount() > 0){

            $array = $sql->fetch();

        }

        return $array;

    }
}

?>