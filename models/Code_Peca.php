<?php
session_start();
require '../utils/conexao.php';

//Inserção de peça no banco
if (isset($_POST['SavePeca'])) {
    $NomePeca = mysqli_real_escape_string($con, $_POST['NomePeca']);
    $MarcaPeca = mysqli_real_escape_string($con, $_POST['MarcaPeca']);
    $QtdPeca = mysqli_real_escape_string($con, $_POST['QtdPeca']);
    $CnpjFornecedor = mysqli_real_escape_string($con, $_POST['CnpjFornecedor']);
    $NomeFornecedor = mysqli_real_escape_string($con, $_POST['NomeFornecedor']);
    $TelFornecedor = mysqli_real_escape_string($con, $_POST['TelFornecedor']);
    $DataPedido =  mysqli_real_escape_string($con, $_POST['DataPedido']);
    $DataRecebimento = mysqli_real_escape_string($con, $_POST['DataRecebimento']);
    $DescricaoPeca = mysqli_real_escape_string($con, $_POST['DescricaoPeca']);
    $imagemPeca = mysqli_real_escape_string($con, $_FILES['ImagemPeca']);

    if ($NomePeca == "") {
        $_SESSION['message'] = "Nome da peça não informado !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($MarcaPeca == "") {
        $_SESSION['message'] = "Marca da peça não informado !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($QtdPeca == "") {
        $_SESSION['message'] = "Quantidade da peça não informado !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($CnpjFornecedor == "") {
        $_SESSION['message'] = "Cnpj do fornecedor não informado !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($NomeFornecedor == "") {
        $_SESSION['message'] = "Nome do fornecedor não informado !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($TelFornecedor == "") {
        $_SESSION['message'] = "Telefone do fornecedor não informado !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($DataPedido == "") {
        $_SESSION['message'] = "Data do pedido não informada !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($DataRecebimento == "") {
        $_SESSION['message'] = "Data do recebimento não informada !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($DescricaoPeca == "") {
        $_SESSION['message'] = "Descricão da peça não informada !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }
    elseif ($imagemPeca == "") {
        $_SESSION['message'] = "Adicione uma imagem da peça !";
        header("location: ../views/cadastroPeca.php");
        exit(0);
    }

    else {

        $query = "INSERT INTO fornecedores (CnpjFornecedor, NomeFornecedor, TelFornecedor) 
        VALUES ('$CnpjFornecedor', '$NomeFornecedor', '$TelFornecedor')";


        $query_run = $con->query($query) or die ("Falha na conexao");

                //inserindo caminho da imagem no banco
        if(isset($_FILES['ImagemPeca'])){

                    $imagem = $_FILES['ImagemPeca'];
        
                    $pasta = "../images/";
        
                    $NomeDaImagem = $imagem['name'];
                    // adicionando um numero único ao arquivo
                    $NovoNomeImagem = uniqid();
                    // removendo a extensão do arquivo
                    // strtolower - põe todas a letras em minusculo
                    $extensao = strtolower(pathinfo($NomeDaImagem, PATHINFO_EXTENSION));
                  
                    $path = $pasta . $NovoNomeImagem . "." . $extensao;
        
                     // move_upload_file irá mover o arquivo selecionado para upload para outro local
                    $SucessoUpload = move_uploaded_file($imagem["tmp_name"], $path);
        
                    if($SucessoUpload){

                        $query2 = "INSERT INTO pecas(NomePeca, MarcaPeca, QtdPeca, DataPedido, DataRecebimento, 
                        DescricaoPeca, CnpjFornecedor, Nome, Path) VALUES ('$NomePeca', '$MarcaPeca', '$QtdPeca', '$DataPedido', 
                        '$DataRecebimento', '$DescricaoPeca', '$CnpjFornecedor','$NomeDaImagem','$path')";
                
                        $query_run = $con->query($query2) or die ("Falha na conexao");



                        // $query3 = "insert into pecas (Nome, Path) values ('$NomeDaImagem','$path')";
                        // $query_run = $con->query($query3) or die ("Falha na conexao");
                      
                    }
                    else{
                          echo "falha ao enviar foto da peça";
                    }
        }

        if ($query_run){

            $_SESSION['message'] = "Peça cadastrada com sucesso!";
            header("location: ../views/cadastroPeca.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = "Peça não cadastrada";
            header("location: ../views/cadastroPeca.php");
            exit(0);
        }

    }

}

?>