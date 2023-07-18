<?php

require 'conexao.php';

//class Usuario{

    // implementar depois
    // private $json;
    // private $resutado;

    // private $nome;
    // private $usuario;
    // private $senha;
    // private $nome = $_POST['nomeFuncionario'];
    // private $usuario = $_POST['usuario'];
    // private $senha = $_POST['senha'];

    // public function inserirAluno(){

        // $json = file_get_contents('php//input');
        // $resutado = json_decode($json);
        // $usuario = $resultado->usuario;
        // $senha = $resultado->senha;
        // $nome = $resultado->nomeFuncionario;

        // private $nome = $_POST['nomeFuncionario'];
        // private $usuario = $_POST['usuario'];
        // private $senha = $_POST['senha'];
        
        if (isset($_POST['save_funcionario'])){
            
            $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
            $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
            $senha = mysqli_real_escape_string($con, $_POST['senha']);

            $query = "INSERT INTO usuario (Nome, Usuario, Senha) 
                        VALUES ('$nome', '$usuario', md5('$senha'))";
            
            $query_run = mysqli_query($con, $query);

            if ($query_run){

                $_SESSION['message'] = "Funcionario cadastrado com sucesso!";
                header("location: V_cadastraUsuario.php");
                exit(0);
            }
            else {
                $_SESSION['message'] = "Funcionário não cadastrado";
                header("location: V_cadastraUsuario.php");
                exit(0);
            }
        }
       

    

   
    
//}

?>