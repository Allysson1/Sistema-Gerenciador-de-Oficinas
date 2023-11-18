<?php
    include('../utils/protect.php');
    require ('../utils/conexao.php');
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 1;

    if ($_SESSION['nivelFuncionario'] < $nivel_necessario){
        header("location: ../views/home.php");
        $_SESSION['message'] = "Você não tem acesso a está página";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Serviço</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    <?php include ('../utils/header.php'); ?>

    <main class="main-content"> 
        <div class="row">            
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Serviço</p>
            </div>  
        </div> 

        <section class="section-content">

            <div class="row" style="margin: 0px">
                <div class="containerPesquisaHome ml-auto">
                    <div class="col-12">
                        <input type="text" class="inputPesquisaHome" id="filtrar-tabela" placeholder="Digite a placa...">
                        <button class="botaoPesquisaHome">Pesquisar</button>
                    </div>
                </div>                
            </div>      
            
            <?php include '../utils/message.php'; ?> 

            <div class="row" style="margin: 0px">


                <?php 
                    $query = "SELECT idOrdemServico, placa, statusServico, cliente, nomeVeiculo,
                    anoVeiculo, tipoServico, valor, prazoEntrega, observacao
                     FROM ordemServico where statusServico != 'Finalizado'";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0){

                        foreach ($query_run as $ordemServico) {
                ?>
                            
                            <div class="col-sm-4 consulta">
                                <div class="cardHome">
                                    <p class="tituloHome">Placa do Carro:</p>
                                    <div class="placaHome">
                                        <span class="info-nome"><?= $ordemServico['placa']?></span>
                                    </div>
                                    <div class="todosItensCard">                        
                                        <div class="itemCard">
                                            <span>Nome do Cliente:</span>
                                            <span id=""><?= $ordemServico['cliente']?></span>
                                        </div>
                                        <div class="itemCard">
                                            <span>Modelo do veículo:</span>
                                            <span id=""><?= $ordemServico['nomeVeiculo']?></span>
                                        </div>
                                        <div class="itemCard">
                                            <span>Prazo de Entrega:</span>
                                            <span id=""><?= $ordemServico['prazoEntrega']?></span>
                                        </div>
                                        <div class="itemCard">
                                            <span>Status do serviço:</span>
                                            <span id=""><?= $ordemServico['statusServico']?></span>
                                        </div>
                                        <button class="botaoVerMaisCard">Ver Mais...</button>
                                    </div>                        
                                </div>                    
                            </div>
                <?php           
                        }
                    }


                ?>
            </div>

            
           
        </section>

    </main>
    
    <script src="../js/filtar.js"></script>
    
</body>
</html>