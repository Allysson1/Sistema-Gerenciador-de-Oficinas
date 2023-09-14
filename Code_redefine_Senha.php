<?php
require 'conexao.php';


    if (isset($_POST['usuario']) || isset($_POST['senha'])){

            $usuario = $con->real_escape_string($_POST['usuario']);
            $senha = $con->real_escape_string($_POST['senha']);
            $Confsenha =$con->real_escape_string($_POST['confSenha']);
       

        if (strlen($_POST['usuario']) == 0){
            echo "Usuario não informado";
        }
        elseif (strlen($_POST['senha']) == 0){
            echo "senha não informada"; 
        }

        elseif (strlen($_POST['confSenha']) == 0){
            echo "confirmação senha não informada"; 
        }

        elseif ($Confsenha !== $senha){
            $_SESSION['message'] = 'A senha nova senha e a senha na confirmação são diferentes';
            header("location: V_redefineSenha.php");
            exit(0); 
        }

        else{

            $query = "UPDATE usuario set senha = md5('$senha') 
                      WHERE usuario = '$usuario'";

            $query_run = $con->query($query) or die("falha na conexão do código SQL: " . $con->error); 

                header("location: index.php");
            
        }  


    }

?>
     

        



        