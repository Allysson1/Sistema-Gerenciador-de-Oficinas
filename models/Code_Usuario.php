<?php
session_start();
require '../utils/conexao.php';


        // comando para salvar funcionário
if (isset($_POST['save_funcionario'])){
         
    $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nivelFuncionario = mysqli_real_escape_string($con, $_POST['nivelFuncionario']);


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


if (isset($_POST['delete_funcionario'])){

    $funcionario_id = mysqli_real_escape_string($con, $_POST['delete_funcionario']);

    $query = "UPDATE usuario SET status = 'D' WHERE idUsuario = '$funcionario_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run){
        $_SESSION['message'] = "funcionário excluído com sucesso.";
        header("location: ../views/V_VisualizaUsuarios.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Não foi possivel excluir o funcionário";
        header("location: ../views/V_VisualizaUsuarios.php");
        exit(0);
    }
}


if (isset($_POST['update_funcionario'])){

    $funcionario_id = mysqli_real_escape_string($con, $_POST['funcionario_id']);


    $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $Confsenha = mysqli_real_escape_string($con, $_POST['confSenha']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nivelFuncionario = mysqli_real_escape_string($con, $_POST['nivelFuncionario']);

    var_dump( $nivelFuncionario);

    if ($senha == ""){
        $_SESSION['message'] = "Senha do funcionário não inserida!";
        header("location: ../views/V_EditaUsuario.php?idUsuario=$funcionario_id");
        exit(0);
    }

    elseif ($Confsenha == ""){
        $_SESSION['message'] = "Confirmação de Senha do funcionário não inserida!";
        header("location: ../views/V_EditaUsuario.php?idUsuario=$funcionario_id");
        exit(0);
    }

    if ($Confsenha !== $senha){
        $_SESSION['message'] = 'A senha nova senha e a senha redigitada são diferentes';
        header("location: ../views/V_EditaUsuario.php?idUsuario=$funcionario_id");
        exit(0); 
    }

    else{

        $query = "UPDATE usuario SET Nome='$nome', Usuario = '$usuario', Senha = md5('$senha'), email = ('$email'), nivelFuncionario = ('$nivelFuncionario')
        WHERE idUsuario = '$funcionario_id' ";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] = 'Funcionário atualizado com sucesso';
            header("location: ../views/V_VisualizaUsuarios.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Não foi possivel atualizar o funcionário";
            header("location: ../views/V_EditaUsuario.php");
            exit(0);
        }

    }
    
}
   
    


?>