<?php
    session_start();
    require '../utils/conexao.php';

    if (isset($_POST['save_ordemServico'])){

        $placa = mysqli_real_escape_string($con, $_POST['placa']);
        $statusServico = mysqli_real_escape_string($con, $_POST['statusServico']);
        $cliente = mysqli_real_escape_string($con, $_POST['cliente']);
        $nomeVeiculo = mysqli_real_escape_string($con, $_POST['nomeVeiculo']);
        $anoVeiculo = mysqli_real_escape_string($con, $_POST['anoVeiculo']);
        $tipoServico = mysqli_real_escape_string($con, $_POST['tipoServico']);
        $valor = mysqli_real_escape_string($con, $_POST['valor']);
        $prazoEntrega = mysqli_real_escape_string($con, $_POST['prazoEntrega']);
        $observacao = mysqli_real_escape_string($con, $_POST['observacao']);
        
    
        if ($placa == ""){ 
            $_SESSION['message'] = "Placa do Carro não inserida!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($statusServico == ""){ 
            $_SESSION['message'] = "Estatus não inserido!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($cliente == ""){ 
            $_SESSION['message'] = "Cliente não inserido(a)!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($nomeVeiculo == ""){ 
            $_SESSION['message'] = "Nome do veículo não inserido!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($anoVeiculo == ""){ 
            $_SESSION['message'] = "Ano do veículo não inserido!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($tipoServico == ""){ 
            $_SESSION['message'] = "Tipo de serviço não inserido!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($valor == ""){ 
            $_SESSION['message'] = "Valor não inserido!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($prazoEntrega == ""){ 
            $_SESSION['message'] = "Prazo de entrega não inserido!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        else{

            if ($observacao == ""){ 
                $observacao = 'não inserido';
            }

            $query = "INSERT INTO ordemServico (placa, statusServico, cliente, nomeVeiculo,
                    anoVeiculo, tipoServico, valor, prazoEntrega, observacao)
                    VALUES ('$placa', '$statusServico', '$cliente', '$nomeVeiculo', '$anoVeiculo',
                    '$tipoServico', '$valor', '$prazoEntrega', '$observacao')";

            $query_run = mysqli_query($con, $query);

            if ($query_run){
                $_SESSION['message'] = "Ordem de Serviço cadastrada com sucesso!";
                header("location: ../views/cadastroServico.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "Ordem de Serviço não cadastrada";
                header("location: ../views/cadastroServico.php");
                exit(0);
            }
            
        }
    
    }


    if (isset($_POST['delete_ordem_servico'])){

        $ordem_id = mysqli_real_escape_string($con, $_POST['delete_ordem_servico']);
    
        $query = "UPDATE ordemServico SET statusServico = 'Desativada' WHERE idOrdemServico = '$ordem_id'";
        $query_run = mysqli_query($con, $query);
    
        if ($query_run){
            $_SESSION['message'] = "Ordem de Serviço excluída com sucesso.";
            header("location: ../views/home.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Não foi possivel excluir a ordem de servico";
            header("location: ../views/home.php");
            exit(0);
        }
    }


    if (isset($_POST['update_ordem_servico'])){

        $idOrdem = mysqli_real_escape_string($con, $_POST['idOrdemServico']);
        $placa = mysqli_real_escape_string($con, $_POST['placa']);
        $statusServico = mysqli_real_escape_string($con, $_POST['statusServico']);
        $cliente = mysqli_real_escape_string($con, $_POST['cliente']);
        $nomeVeiculo = mysqli_real_escape_string($con, $_POST['nomeVeiculo']);
        $anoVeiculo = mysqli_real_escape_string($con, $_POST['anoVeiculo']);
        $tipoServico = mysqli_real_escape_string($con, $_POST['tipoServico']);
        $valor = mysqli_real_escape_string($con, $_POST['valor']);
        $prazoEntrega = mysqli_real_escape_string($con, $_POST['prazoEntrega']);
        $observacao = mysqli_real_escape_string($con, $_POST['observacao']);

        // var_dump($_POST['idOrdemServico']);
        // var_dump($_POST['placa']);
        // var_dump($_POST['statusServico']);
        // var_dump($_POST['cliente']);
        // var_dump($_POST['nomeVeiculo']);
        // var_dump($_POST['nomeVeiculo']);
        // var_dump($_POST['anoVeiculo']);
        // var_dump($_POST['tipoServico']);
        // var_dump($_POST['valor']);
        // var_dump($_POST['prazoEntrega']);
        // var_dump($_POST['observacao']);

        
    
        if ($placa == ""){ 
            $_SESSION['message'] = "Placa do Carro não inserida!";
            header("location: ../views/home.php");
            exit(0);
        }
        if (strlen($placa) < 7 || strlen($placa) > 7){ 
            $_SESSION['message'] = "A placa do carro deve conter apenas 7 digitos";
            header("location: ../views/home.php");
            exit(0);
        }

        elseif ($statusServico == ""){ 
            $_SESSION['message'] = "Estatus não inserido!";
            header("location: ../views/home.php");
            exit(0);
        }
        elseif ($cliente == ""){ 
            $_SESSION['message'] = "Cliente não inserido(a)!";
            header("location: ../views/home.php");
            exit(0);
        }
        elseif ($nomeVeiculo == ""){ 
            $_SESSION['message'] = "Nome do veículo não inserido!";
            header("location: ../views/home.php");
            exit(0);
        }
        elseif ($anoVeiculo == ""){ 
            $_SESSION['message'] = "Ano do veículo não inserido!";
            header("location: ../views/home.php");
            exit(0);
        }
        elseif ($tipoServico == ""){ 
            $_SESSION['message'] = "Tipo de serviço não inserido!";
            header("location: ../views/home.php");
            exit(0);
        }
        elseif ($valor == ""){ 
            $_SESSION['message'] = "Valor não inserido!";
            header("location: ../views/home.php");
            exit(0);
        }
        elseif ($prazoEntrega == ""){ 
            $_SESSION['message'] = "Prazo de entrega não inserido!";
            header("location: ../views/home.php");
            exit(0);
        }
        else{

            if ($observacao == ""){ 
                $observacao = 'não inserido';
            }

            $query = " UPDATE ordemServico
                        set placa = '$placa', 
                        statusServico = '$statusServico', 
                        cliente = '$cliente', 
                        nomeVeiculo = '$nomeVeiculo', 
                        anoVeiculo = '$anoVeiculo', 
                        tipoServico = '$tipoServico', 
                        valor = '$valor', 
                        prazoEntrega = '$prazoEntrega', 
                        observacao = '$observacao' 
                        where idOrdemServico = '$idOrdem' ";

            $query_run = mysqli_query($con, $query);

            if ($query_run){
                $_SESSION['message'] = "Ordem de Serviço alterada com sucesso!";
                header("location: ../views/home.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "Ordem de Serviço não alterada";
                header("location: ../views/home.php");
                exit(0);
            }
            
        }


    
    }
   
    if (isset($_POST['finaliza_ordem_servico'])){

        $ordem_id = mysqli_real_escape_string($con, $_POST['finaliza_ordem_servico']);
    
        $query = " UPDATE ordemServico SET statusServico = 'Finalizado' WHERE idOrdemServico = '$ordem_id' ";
        $query_run = mysqli_query($con, $query);
    
        if ($query_run){
            $_SESSION['message'] = "Ordem de Serviço finalizada com sucesso.";
            header("location: ../views/home.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Não foi possivel finalizar a ordem de servico";
            header("location: ../views/home.php");
            exit(0);
        }
    }
    

?>