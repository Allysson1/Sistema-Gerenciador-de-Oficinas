<?php
    session_start();
    require '../utils/conexao.php';


    if (isset($_POST['email']) || isset($_POST['senha'])){

            $email = $con->real_escape_string($_POST['email']);
            $senha = $con->real_escape_string($_POST['senha']);
            $Confsenha =$con->real_escape_string($_POST['confSenha']);
       

        if (strlen($_POST['email']) == 0){
            $_SESSION['message'] = "E-mail não informado";
            header("location: ../views/V_redefineSenha.php");
            exit(0);
        }
        elseif (strlen($_POST['senha']) == 0){
            $_SESSION['message'] = "senha não informada";
            header("location: ../views/V_redefineSenha.php");
            exit(0); 
        }

        elseif (strlen($_POST['confSenha']) == 0){
            $_SESSION['message'] = "confirmação de senha não informada";
            header("location: ../views/V_redefineSenha.php");
            exit(0);  

        }

        elseif ($Confsenha !== $senha){
            $_SESSION['message'] = 'A senha nova e a confirmação de senha são diferentes';
            header("location: ../views/V_redefineSenha.php");
            exit(0); 
        }

        else{

            $query = "UPDATE usuario set senha = md5('$senha') 
                      WHERE email = '$email'";

            $query_run = $con->query($query) or die("falha na conexão do código SQL: " . $con->error);  
            
                $_SESSION['message'] = 'Senha alterada com sucesso';
                header("location: ../views/index.php");
                exit(0); 
        }  


    }

    else echo "erro"; 

?>
     

        



        