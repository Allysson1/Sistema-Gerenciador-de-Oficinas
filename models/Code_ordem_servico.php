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
                    anoVeiculo, tipoServico, valor, prazoEntresga, observacao)
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

   
    

?>