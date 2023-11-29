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
    elseif (strlen($cpfcliente) > 11 || strlen($cpfcliente) < 11) {
        $_SESSION['message'] = "CPF do cliente deve conter 11 números!";
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


if (isset($_POST['delete_cliente'])){

    $cpfcliente = mysqli_real_escape_string($con, $_POST['delete_cliente']);

    $query = "UPDATE cliente SET statusCliente = 'D' WHERE CPF = '$cpfcliente'";
    $query_run = mysqli_query($con, $query);

    if ($query_run){
        $_SESSION['message'] = "cliente excluído com sucesso.";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Não foi possivel excluir o cliente";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
}


if (isset($_POST['update_cliente'])){

    $nomecliente = mysqli_real_escape_string($con, $_POST['nomeCliente']);
    $cpfcliente = mysqli_real_escape_string($con, $_POST['cpfCliente']);
    $contato = mysqli_real_escape_string($con, $_POST['contato']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
    $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    //debug
    // var_dump( $nivelFuncionario);
    // var_dump($nome);
    // var_dump($usuario);
    // var_dump($senha);
    // var_dump($Confsenha);
    // var_dump($email);
    // var_dump($funcionario_id);

    if ($nomecliente == ""){ 
        $_SESSION['message'] = "Nome do cliente não inserido!";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
    elseif ($cpfcliente == ""){
        $_SESSION['message'] = "CPF do cliente não inserido!";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
    elseif (strlen($cpfcliente) > 11 || strlen($cpfcliente) < 11) {
        $_SESSION['message'] = "CPF do cliente deve conter 11 números!";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
    elseif ($contato == ""){
        $_SESSION['message'] = "contado do cliente não inserido!";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
    elseif ($endereco == ""){ 
        $_SESSION['message'] = "Endereço do cliente não inserido";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }

    elseif ($cidade == ""){
        $_SESSION['message'] = "cidade do cliente não inserida!";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }
    elseif ($estado == ""){
        $_SESSION['message'] = "estado do cliente não inserido!";
        header("location: ../views/consultaCliente.php");
        exit(0);
    }

    else{

        $query = "UPDATE cliente SET CPF = '$cpfcliente', nome = '$nomecliente', contato = '$contato',
         endereco = '$endereco', cidade = '$cidade', UF = '$estado'";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] = 'Cliente atualizado com sucesso';
            header("location: ../views/consultaCliente.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Não foi possivel atualizar o cliente";
            header("location: ../views/consultaCliente.php");
            exit(0);
        }

    }
    
}
   
    


?>