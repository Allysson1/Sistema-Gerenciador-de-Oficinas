<?php
session_start();
require '../utils/conexao.php';


        // comando para salvar cliente
if (isset($_POST['save_cliente'])){
         
    $nomecliente = mysqli_real_escape_string($con, $_POST['nomeCliente']);
    $cpfcliente = mysqli_real_escape_string($con, $_POST['cpfCliente']);
    $contato = mysqli_real_escape_string($con, $_POST['contato']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
    $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);

    // echo($_POST['nomeCliente']);
    // var_dump($_POST['cpfCliente']);
    // var_dump($_POST['contato']);
    // var_dump($_POST['endereco']);
    // var_dump($_POST['cidade']);
    // var_dump($_POST['estado']);



    if ($nomecliente == ""){ 
        $_SESSION['message'] = "Nome do cliente não inserido!";
        header("location: ../views/cadastroCliente.php");
        exit(0);
    }
    elseif ($cpfcliente == ""){
        $_SESSION['message'] = "CPF do cliente não inserido!";
        header("location: ../views/cadastroCliente.php");
        exit(0);
    }
    elseif ($contato == ""){
        $_SESSION['message'] = "contado do cliente não inserido!";
        header("location: ../views/cadastroCliente.php");
        exit(0);
    }
    elseif ($endereco == ""){ 
        $_SESSION['message'] = "Endereço do cliente não inserido";
        header("location: ../views/cadastroCliente.php");
        exit(0);
    }

    elseif ($cidade == ""){
        $_SESSION['message'] = "cidade do cliente não inserida!";
        header("location: ../views/cadastroCliente.php");
        exit(0);
    }
    elseif ($estado == ""){
        $_SESSION['message'] = "estado do cliente não inserido!";
        header("location: ../views/cadastroCliente.php");
        exit(0);
    }

    else{
        $query = "insert into cliente (CPF, nome, contato, endereco, cidade, UF)
        values ($cpfcliente,'$nomecliente', $contato, '$endereco', '$cidade', '$estado')";
    
        $query_run = $con->query($query) or die ("Falha na conexao");

        if ($query_run){

            $_SESSION['message'] = "Cliente cadastrado com sucesso!";
            header("location: ../views/cadastroCliente.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = "Cliente não cadastrado";
            header("location: ../views/cadastroCliente.php");
            exit(0);
        }

    }
    
}


// if (isset($_POST['delete_funcionario'])){

//     $funcionario_id = mysqli_real_escape_string($con, $_POST['delete_funcionario']);

//     $query = "UPDATE usuario SET status = 'D' WHERE idUsuario = '$funcionario_id'";
//     $query_run = mysqli_query($con, $query);

//     if ($query_run){
//         $_SESSION['message'] = "funcionário excluído com sucesso.";
//         header("location: ../views/V_VisualizaUsuarios.php");
//         exit(0);
//     }
//     else{
//         $_SESSION['message'] = "Não foi possivel excluir o funcionário";
//         header("location: ../views/V_VisualizaUsuarios.php");
//         exit(0);
//     }
// }


// if (isset($_POST['update_funcionario'])){

//     $funcionario_id = mysqli_real_escape_string($con, $_POST['funcionario_id']);
//     $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
//     $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
//     $senha = mysqli_real_escape_string($con, $_POST['senha']);
//     $Confsenha = mysqli_real_escape_string($con, $_POST['confSenha']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $nivelFuncionario = mysqli_real_escape_string($con, $_POST['nivelFuncionario']);

//     //debug
//     // var_dump( $nivelFuncionario);
//     // var_dump($nome);
//     // var_dump($usuario);
//     // var_dump($senha);
//     // var_dump($Confsenha);
//     // var_dump($email);
//     // var_dump($funcionario_id);

//     if ($senha == ""){
//         $_SESSION['message'] = "Senha do funcionário não inserida!";
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0);
//     }

//     elseif ($Confsenha == ""){
//         $_SESSION['message'] = "Confirmação de Senha do funcionário não inserida!";
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0);
//     }
//     elseif (strlen($senha) < 8){ 
//         $_SESSION['message'] = "A senha deve possuir no minimo 8 digitos";
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0);
//     }

//     elseif ($Confsenha !== $senha){
//         $_SESSION['message'] = 'A senha nova senha e a senha redigitada são diferentes';
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0); 
//     }

//     else{

//         $query = "UPDATE usuario SET Nome='$nome', Usuario = '$usuario', Senha = md5('$senha'), email = ('$email'), nivelFuncionario = ('$nivelFuncionario')
//         WHERE idUsuario = '$funcionario_id' ";
//         $query_run = mysqli_query($con, $query);

//         if($query_run){
//             $_SESSION['message'] = 'Funcionário atualizado com sucesso';
//             header("location: ../views/V_VisualizaUsuarios.php");
//             exit(0);
//         }
//         else{
//             $_SESSION['message'] = "Não foi possivel atualizar o funcionário";
//             header("location: ../views/V_VisualizaUsuarios.php");
//             exit(0);
//         }

//     }
    
// }
   
    


?>