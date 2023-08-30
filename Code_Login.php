<?php
require 'conexao.php';


    if (isset($_POST['usuario']) || isset($_POST['senha'])){
       

        if (strlen($_POST['usuario']) == 0){
            echo "Usuario não informado";
        }
        elseif (strlen($_POST['senha']) == 0){
            echo "senha não informada"; 
        }
        else{

            // o comando abaixo limpa os dados inseridos pelo usuário como forma de segurança
            // real_escape_string limpa os dados
            $usuario = $con->real_escape_string($_POST['usuario']);
            $senha = $con->real_escape_string($_POST['senha']);

            $query = "SELECT * FROM usuario 
                      WHERE usuario = '$usuario' 
                      AND senha = md5('$senha')  
                      AND status = ''" ;

            $query_run = $con->query($query) or die("falha na conexão do código SQL: " . $con->error); 
            
            // retorna a quantidade de linhas afetadas
            $qunatidade = $query_run->num_rows;

            if ($qunatidade == 1){

                $usuario = $query_run->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }
                // a session continua válida por determinado tempo , independentemente se o 
                //usuario mudar de pagina ou não, diferente do $_GET que so fica na URL ou do 
                //$_POST que só fica válido ao enviar um formulãrio.
                $_SESSION['idUsuario'] = $usuario['idUsuario'];
                $_SESSION['nome'] = $usuario['nome'];

                header("location: V_cadastraUsuario.php");
            }
            else {
                $_SESSION['message'] = "Funcionário não cadastrado";
                
                echo "usuário/senha incorreto ou inexistente";
                
            }
            
        }


       


    }

?>
     

        



        