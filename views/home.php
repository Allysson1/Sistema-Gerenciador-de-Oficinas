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
                    </div>
                </div>                
            </div>      
            
            <?php include '../utils/message.php'; ?> 

            <div class="row" style="margin: 0px">


                <?php 
                    $query = "SELECT * FROM ordemServico where statusServico != 'Finalizado'";
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
                                        <button class="botaoVerMaisCard" data-toggle="modal" data-target="#modalOrdemServico<?= $ordemServico['idOrdemServico'];?>">Ver Mais...</button>
                                    </div>                        
                                </div>                    
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modalOrdemServico<?= $ordemServico['idOrdemServico'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="ModalAlterarLabel">Alterar Ordem de Serviço</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                            
                                        <section class="section-content">  
                                            <form enctype="multipart/form-data" action="../models/Code_ordem_servico.php" method="POST" class="col-12 col-lg-12">

                                                <div class="row">
                                                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                                        <div class="col-6">
                                                            <label for="placa">Placa:</label>
                                                            <input type="text" name="placa" value=" <?= $ordemServico['placa'];?> " class="form-control p-2 campoDigitarCadasServico">
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="prazoEntrega">Prazo de entrega:</label>
                                                            <input type="date" name="prazoEntrega" value="<?= $ordemServico['prazoEntrega']?>" class="form-control campoDigitarCadasServico">
                                                        </div>  
                                                        
                                                    </div>

                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                        <div class="col-6">
                                                            <label for="anoVeiculo">Ano do Automóvel:</label>
                                                            <input type="text" name="anoVeiculo" value=" <?= $ordemServico['anoVeiculo'];?> " class="form-control campoDigitarCadasServico">
                                                        </div>                                                    

                                                        <div class="col-6">
                                                            <label for="nomeVeiculo">Modelo do Automóvel:</label>
                                                            <input type="text" name="nomeVeiculo" value=" <?= $ordemServico['nomeVeiculo'];?> " class="form-control campoDigitarCadasServico">
                                                        </div> 

                                                    </div>
                                    
                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                    <div class="col-6">
                                                            <label for="Cliente">Cliente</label>
                                                            <select name="cliente" class="SelectServicoCadasServico" id="inputGroupSelect01">
                                                                <option selected><?= $ordemServico['cliente']?></option>
                                                                <option value="1">Um</option>
                                                                <option value="2">Dois</option>
                                                                <option value="3">Três</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="valor">Valor:</label>
                                                            <input type="text" name="valor" value=" <?= $ordemServico['valor'];?> " class="form-control bg-dark text-white campoDigitarCadasServico">
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                        
                                                        <div class="col-6">
                                                            <label>Serviço:</label>  
                                                            <select name="tipoServico" class="SelectServicoCadasServico">
                                                                <option selected><?= $ordemServico['tipoServico'];?></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>  

                                                        <div class="col-6">
                                                            <label for="nomeSelectServico">Estatus:</label>  
                                                            <select name="statusServico" class="SelectServicoCadasServico">
                                                                <option selected><?= $ordemServico['statusServico']?></option>
                                                                <option value="Iniciado">Iniciado</option>
                                                                <option value="Em Andamento">Em andamento</option>
                                                                <option value="Finalizado">Fianlizado</option>
                                                            </select>
                                                        </div>
                                                                        
                                                    </div>
                                

                                                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                                                            <div class="col-12">
                                                                <label for="username">Observação</label>
                                                                <textarea class="p-2 campoObservacoes" name="DescricaoPeca" rows="6" cols="50"><?= $ordemServico['observacao'];?></textarea>
                                                            </div>                  
                                                    </div>  

                                                    <div class="row col-12">  
                                                            <button class="m-1 ml-5 btn btn-primary btn-sm" type="submit" name="update_ordem_servico">Salvar Alterações</button>
                                                        
                                                            <button class="m-1 ml-5 btn btn-success btn-sm" type="submit" name="finaliza_ordem_servico">Finalizar</button>      
                                                        
                                                            <button class="m-1 ml-5 btn btn-danger btn-sm" type="submit" name="delete_ordem_servico" value="<?= $ordemServico['idOrdemServico'];?>" >Deletar</button>
                                                    </div>
                
                                                </div>
                                
                                            </form>
                                        </section>

                                    </div>
                                    </div>
                                </div>
                            </div>
                <?php           
                            }
                        }
                ?>

                <div class="col-12 divHeaderTopoSite">
                    <p class="nameHeaderTopoSite">Serviços Finalizados</p>
                </div>

                <?php

                    $query = "SELECT * FROM ordemServico where statusServico = 'Finalizado'";
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
                                        <button class="botaoVerMaisCard" data-toggle="modal" data-target="#modalOrdemServico<?= $ordemServico['idOrdemServico'];?>">Ver Mais...</button>
                                    </div>                        
                                </div>                    
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modalOrdemServico<?= $ordemServico['idOrdemServico'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="ModalAlterarLabel">Alterar Ordem de Serviço</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            
                                        <section class="section-content">  
                                            <form enctype="multipart/form-data" action="../models/Code_ordem_servico.php" method="POST" class="col-12 col-lg-12">

                                                <div class="row">
                                                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                                        <div class="col-6">
                                                            <label for="placa">Placa:</label>
                                                            <input type="text" name="placa" value=" <?= $ordemServico['placa'];?> " class="form-control p-2 campoDigitarCadasServico">
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="prazoEntrega">Prazo de entrega:</label>
                                                            <input type="date" name="prazoEntrega" value="<?= $ordemServico['prazoEntrega']?>" class="form-control bg-dark text-white campoDigitarCadasServico">
                                                        </div>  
                                                        
                                                    </div>

                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                        <div class="col-6">
                                                            <label for="anoVeiculo">Ano do Automóvel:</label>
                                                            <input type="text" name="anoVeiculo" value=" <?= $ordemServico['anoVeiculo'];?> " class="form-control bg-dark text-white campoDigitarCadasServico">
                                                        </div>                                                    

                                                        <div class="col-6">
                                                            <label for="nomeVeiculo">Modelo do Automóvel:</label>
                                                            <input type="text" name="nomeVeiculo" value=" <?= $ordemServico['nomeVeiculo'];?> " class="form-control campoDigitar">
                                                        </div> 

                                                    </div>
                                    
                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                    <div class="col-6">
                                                            <label for="Cliente">Cliente</label>
                                                            <select name="cliente" class="custom-select bg-dark text-white" id="inputGroupSelect01">
                                                                <option selected><?= $ordemServico['cliente']?></option>
                                                                <option value="1">Um</option>
                                                                <option value="2">Dois</option>
                                                                <option value="3">Três</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="valor">Valor:</label>
                                                            <input type="text" name="valor" value=" <?= $ordemServico['valor'];?> " class="form-control bg-dark text-white campoDigitarCadasServico">
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                        
                                                        <div class="col-6">
                                                            <label>Serviço:</label>  
                                                            <select name="tipoServico" class="SelectServicoCadasServico">
                                                                <option selected><?= $ordemServico['tipoServico'];?></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>  

                                                        <div class="col-6">
                                                            <label for="nomeSelectServico">Estatus:</label>  
                                                            <select name="statusServico" class="SelectServicoCadasServico">
                                                                <option selected><?= $ordemServico['statusServico']?></option>
                                                                <option value="Iniciado">Iniciado</option>
                                                                <option value="Em Andamento">Em andamento</option>
                                                                <option value="Finalizado">Fianlizado</option>
                                                            </select>
                                                        </div>
                                                                        
                                                    </div>
                                

                                                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                                                            <div class="col-12">
                                                                <label for="username">Observação</label>
                                                                <textarea class="p-2 campoObservacoes" name="DescricaoPeca" rows="6" cols="50"><?= $ordemServico['observacao'];?></textarea>
                                                            </div>                  
                                                    </div>  

                                                    <div class="row col-12">  
                                                            <button class="m-1 ml-5 col-6 btn btn-primary btn-sm" type="submit" name="update_ordem_servico">Salvar Alterações</button>     
                                                        
                                                            <button class="m-1 ml-5 btn btn-danger btn-sm" type="submit" name="delete_ordem_servico" value="<?= $ordemServico['idOrdemServico'];?>" >Deletar</button>
                                                    </div>

                                                </div>
                                
                                            </form>
                                        </section>

                                    </div>
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