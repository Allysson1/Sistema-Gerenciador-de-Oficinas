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
        $pecaUsada = mysqli_real_escape_string($con, $_POST['pecaUsada']);
        $qtdPeca = mysqli_real_escape_string($con, $_POST['qtdPeca']);        
    
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
        elseif ($pecaUsada == ""){ 
            $_SESSION['message'] = "Peça a ser usada não inserida!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        elseif ($qtdPeca == ""){ 
            $_SESSION['message'] = "Quantidade de peças não inserida!";
            header("location: ../views/cadastroServico.php");
            exit(0);
        }
        else{

            if ($observacao == ""){ 
                $observacao = 'não inserido';
            }

            $query = "INSERT INTO ordemServico (placa, statusServico, cliente, nomeVeiculo,
                    anoVeiculo, tipoServico, valor, prazoEntrega, observacao, peca, qtdPeca)
                    VALUES ('$placa', '$statusServico', '$cliente', '$nomeVeiculo', '$anoVeiculo',
                    '$tipoServico', '$valor', '$prazoEntrega', '$observacao', '$pecaUsada', '$qtdPeca')";

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
        $qtdPeca = mysqli_real_escape_string($con, $_POST['qtdPeca']);
   
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
        elseif ($qtdPeca == ""){ 
            $_SESSION['message'] = "Quantidade de peças não inserida!";
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
                        nomeVeiculo = '$nomeVeiculo', 
                        anoVeiculo = '$anoVeiculo', 
                        tipoServico = '$tipoServico', 
                        valor = '$valor', 
                        prazoEntrega = '$prazoEntrega', 
                        qtdPeca = '$qtdPeca',
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
        $qtdPeca = mysqli_real_escape_string($con, $_POST['qtdPeca']);
        $pecaUsada = mysqli_real_escape_string($con, $_POST['pecaUsada']);
    
        $requisicao = "SELECT peca, qtdPeca from ordemServico where idOrdemServico = $ordem_id"; 
        $query_run_requisicao = mysqli_query($con, $requisicao);

        $row = mysqli_fetch_assoc($query_run_requisicao);

        $IdPeca = $row['peca'];
        $qtdPeca = $row['qtdPeca'];

        // execução da query para finalizar ordens de serviço
        $query = " UPDATE ordemServico SET statusServico = 'Finalizado' WHERE idOrdemServico = '$ordem_id' ";
        $query_run = mysqli_query($con, $query);

        // execução da query para subtrair peças usadas no serviço da tabela de peças
        $query2 = "UPDATE pecas set QtdPeca = QtdPeca - '$qtdPeca' WHERE idPeca = '$IdPeca'";
        $query_run2 = mysqli_query($con, $query2);
    
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