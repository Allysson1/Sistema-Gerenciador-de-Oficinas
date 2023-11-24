<?php
session_start();
require '../utils/conexao.php';

// comando para salvar funcionário
if (isset($_POST['save_funcionario'])){
         
            $NomeFornecedor = mysqli_real_escape_string($con, $_POST['NomeFornecedor']);
            $CnpjFornecedor = mysqli_real_escape_string($con, $_POST['CnpjFornecedor']);
            $TelFornecedor = mysqli_real_escape_string($con, $_POST['TelFornecedor']);
            $EnderecoFornecedor = mysqli_real_escape_string($con, $_POST['EnderecoFornecedor']);
            $CidadeFornecedor = mysqli_real_escape_string($con, $_POST['CidadeFornecedor']);
            $CidadeFornecedor = mysqli_real_escape_string($con, $_POST['CidadeFornecedor']);
        
        
            if ($nome == ""){ 
                $_SESSION['message'] = "Nome do funcionário não inserido!";
                header("location: ../views/V_cadastraUsuario.php");
                exit(0);
            }
            elseif ($usuario == ""){
                $_SESSION['message'] = "Usuário do funcionário não inserido!";
                header("location: ../views/V_cadastraUsuario.php");
                exit(0);
            }
            elseif ($senha == ""){
                $_SESSION['message'] = "Senha do funcionário não inserida!";
                header("location: ../views/V_cadastraUsuario.php");
                exit(0);
            }
            elseif (strlen($senha) < 8){ 
                $_SESSION['message'] = "A senha deve possuir no minimo 8 digitos";
                header("location: ../views/V_cadastraUsuario.php");
                exit(0);
            }
        
            elseif ($email == ""){
                $_SESSION['message'] = "email do funcionário não inserido!";
                header("location: ../views/V_cadastraUsuario.php");
                exit(0);
            }
            elseif ($nivelFuncionario == ""){
                $_SESSION['message'] = "Nivel de acesso do funcionário não inserido!";
                header("location: ../views/V_cadastraUsuario.php");
                exit(0);
            }
        
            else{
                $query = "INSERT INTO usuario (Nome, Usuario, Senha, Email, nivelFuncionario) 
                        VALUES ('$nome', '$usuario', md5('$senha'), '$email', '$nivelFuncionario')";
            
                $query_run = $con->query($query) or die ("Falha na conexao");
        
                if ($query_run){
        
                    $_SESSION['message'] = "Funcionario cadastrado com sucesso!";
                    header("location: ../views/V_cadastraUsuario.php");
                    exit(0);
                }
                else {
                    $_SESSION['message'] = "Funcionário não cadastrado";
                    header("location: ../views/V_cadastraUsuario.php");
                    exit(0);
                }
        
            }
            
        }

?>