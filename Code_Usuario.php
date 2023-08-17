<?php
session_start();
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


        // login do usuário
        // if (isset($_POST['login'])){

        //     $usuario = $_POST['usuario'];
        //     $senha = $_POST['senha'];

        //     $query = $dbh->exec("select * from usuario
        //     where usuario = '$usuario'
        //     and senha = md5('$senha')");

        //     // $query_run = mysqli_query($query);

        //     if ($query > 1){
        //         header("location: V_cadastraUsuario.php");
        //     }
        //     else {
                
        //         exit(0);
        //     }


        // }


        

        // comando para salvar funcionário
if (isset($_POST['save_funcionario'])){
         
    $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    if ($nome == ""){ 
        $_SESSION['message'] = "Nome do funcionário não inserido!";
        header("location: V_cadastraUsuario.php");
        exit(0);
    }
    elseif ($usuario == ""){
        $_SESSION['message'] = "Usuário do funcionário não inserido!";
        header("location: V_cadastraUsuario.php");
        exit(0);
    }
    elseif ($senha == ""){
        $_SESSION['message'] = "Senha do funcionário não inserido!";
        header("location: V_cadastraUsuario.php");
        exit(0);
    }
    else{
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
    
}


if (isset($_POST['delete_funcionario'])){

    $funcionario_id = mysli_real_escape_string($con, $_POST['delete_funcionario']);

    $query = "UPDATE usuario SET status = 'D' WHERE idUsuario = '$funcionario_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run){
        $_SESSION['message'] = "funcionário excluído com sucesso.";
        header("location: V_VisualizaUsuarios.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Não foi possivel excluir o funcionário";
        header("location: V_VisualizaUsuarios.php");
        exit(0);
    }
}


if (isset($_POST['update_funcionario'])){

    $funcionario_id = mysli_real_escape_string($con, $_POST['funcionario_id']);

    $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    $query = "UPDATE usuario SET Nome='$nome', Usuario = '$usuario', Senha = '$senha'
     WHERE idUsuario = '$funcionario_id' ";

     if($query_run){
        $_SESSION['message'] = 'Funcionário atualizado com sucesso';
        header("location: V_VisualizaUsuarios.php")
        exit(0);
     }
     else{
        $_SESSION['message'] = "Não foi possivel atualizar o funcionário";
        header("location: V_VisualizaUsuarios.php");
        exit(0);
    }
}
   
    


?>