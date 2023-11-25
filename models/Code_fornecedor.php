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
    

   
    


?>