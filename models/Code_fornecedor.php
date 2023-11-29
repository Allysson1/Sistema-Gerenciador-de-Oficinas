<?php
session_start();
require '../utils/conexao.php';


        // comando para salvar fornecedor
if (isset($_POST['SaveFornecedor'])){
         
    $NomeFornecedor = mysqli_real_escape_string($con, $_POST['NomeFornecedor']);
    $CnpjFornecedor = mysqli_real_escape_string($con, $_POST['CnpjFornecedor']);
    $TelFornecedor = mysqli_real_escape_string($con, $_POST['TelFornecedor']);
    $EnderecoFornecedor = mysqli_real_escape_string($con, $_POST['EnderecoFornecedor']);
    $CidadeFornecedor = mysqli_real_escape_string($con, $_POST['CidadeFornecedor']);
    $EstadoFornecedor = mysqli_real_escape_string($con, $_POST['EstadoFornecedor']);


    if ($NomeFornecedor == ""){ 
        $_SESSION['message'] = "Nome do fornecedor não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($CnpjFornecedor == ""){
        $_SESSION['message'] = "CNPJ do fornecedor não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($TelFornecedor == ""){
        $_SESSION['message'] = "Telefone do fornecedor não inseridp!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }

    elseif ($EnderecoFornecedor == ""){
        $_SESSION['message'] = "Endereço do fornecedor não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($CidadeFornecedor == ""){
        $_SESSION['message'] = "Nome da cidade não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($EstadoFornecedor == ""){
        $_SESSION['message'] = "Nome do estado não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }


    else{
        $query = "INSERT INTO fornecedores (CnpjFornecedor, NomeFornecedor, TelFornecedor, EnderecoFornecedor, CidadeForncedor, EstadoFornecedor) 
                VALUES ('$CnpjFornecedor', '$NomeFornecedor', '$TelFornecedor', '$EnderecoFornecedor', '$CidadeFornecedor','$EstadoFornecedor')";
    
        $query_run = $con->query($query) or die ("Falha na conexao");

        if ($query_run){

            $_SESSION['message'] = "Fornecedor cadastrado com sucesso!";
            header("location: ../views/cadastroFornecedor.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = "Fornecedor não cadastrado";
            header("location: ../views/cadastroFornecedor.php");
            exit(0);
        }

    }
    
}


if (isset($_POST['DeleteFornecedor'])){

    $CnpjFornecedor = mysqli_real_escape_string($con, $_POST['DeleteFornecedor']);

    $query = "UPDATE fornecedores SET StatusFornecedor = 'D' WHERE CnpjFornecedor = '$CnpjFornecedor'";
    $query_run = mysqli_query($con, $query);

    if ($query_run){
        $_SESSION['message'] = "Fornecedor excluído com sucesso.";
        header("location: ../views/consultaFornecedor.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Não foi possivel excluir o fornecedor";
        header("location: ../views/consultaFornecedor.php");
        exit(0);
    }
}


if (isset($_POST['UpdateFornecedor'])){

    $NomeFornecedor = mysqli_real_escape_string($con, $_POST['NomeFornecedor']);
    $CnpjFornecedor = mysqli_real_escape_string($con, $_POST['CnpjFornecedor']);
    $TelFornecedor = mysqli_real_escape_string($con, $_POST['TelFornecedor']);
    $EnderecoFornecedor = mysqli_real_escape_string($con, $_POST['EnderecoFornecedor']);
    $CidadeFornecedor = mysqli_real_escape_string($con, $_POST['CidadeFornecedor']);
    $EstadoFornecedor = mysqli_real_escape_string($con, $_POST['EstadoFornecedor']);


    if ($NomeFornecedor == ""){ 
        $_SESSION['message'] = "Nome do fornecedor não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($CnpjFornecedor == ""){
        $_SESSION['message'] = "CNPJ do fornecedor não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($TelFornecedor == ""){
        $_SESSION['message'] = "Telefone do fornecedor não inseridp!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }

    elseif ($EnderecoFornecedor == ""){
        $_SESSION['message'] = "Endereço do fornecedor não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($CidadeFornecedor == ""){
        $_SESSION['message'] = "Nome da cidade não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }
    elseif ($EstadoFornecedor == ""){
        $_SESSION['message'] = "Nome do estado não inserido!";
        header("location: ../views/cadastroFornecedor.php");
        exit(0);
    }

    else{

        $query = "UPDATE fornecedores SET CnpjFornecedor='$CnpjFornecedor', NomeFornecedor='$NomeFornecedor', TelFornecedor='$TelFornecedor', EnderecoFornecedor='$EnderecoFornecedor',
                  CidadeForncedor='$CidadeFornecedor', EstadoFornecedor='$EstadoFornecedor'   WHERE CnpjFornecedor='$CnpjFornecedor' ";
        $query_run = mysqli_query($con, $query);

        if ($query_run){

            $_SESSION['message'] = "Dados do fornecedor alterados com sucesso!";
            header("location: ../views/consultaFornecedor.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = "Dados do fornecedor não foram alterados com sucesso!";
            header("location: ../views/consultaFornecedor.php");
            exit(0);
        }

    }
    

}
    


?>