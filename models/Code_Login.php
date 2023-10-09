<?php
    session_start();
    require '../utils/conexao.php';

    if (isset($_POST['usuario']) || isset($_POST['senha'])){
       

        if (strlen($_POST['usuario']) == 0){

            $_SESSION['message'] = "Usuário não informado";
            header("location: ../views/index.php");
            exit(0);
    
        }
        elseif (strlen($_POST['senha']) == 0){
                $_SESSION['message'] = "Senha não informada";
                header("location: ../views/index.php");
                exit(0); 
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
            $quantidade = $query_run->num_rows;

            if ($quantidade >= 1){

                $usuario = $query_run->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }
                // a session continua válida por determinado tempo , independentemente se o 
                //usuario mudar de pagina ou não, diferente do $_GET que so fica na URL ou do 
                //$_POST que só fica válido ao enviar um formulãrio.
                $_SESSION['idUsuario'] = $usuario['idUsuario'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['nivelFuncionario'] = $usuario['nivelFuncionario'];
                

                // var_dump($quantidade);
                // var_dump($_SESSION['idUsuario']);
                // var_dump($_SESSION['nome']);
                // var_dump($_SESSION['nivelFuncionario']);


                header("location: ../views/V_cadastraUsuario.php");
            }
            else {
                $_SESSION['message'] = "usuário/senha incorretos ou inexistentes";
                header("location: ../views/index.php");
                exit(0);
            }
            
        }

    }

?>
     

        



        