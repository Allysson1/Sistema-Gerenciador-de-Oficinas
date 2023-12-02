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
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
                    $query = "SELECT cli.nome, OS.idOrdemServico, OS.placa,
                    OS.nomeVeiculo, OS.prazoEntrega, OS.statusServico,
                    OS.anoVeiculo, OS.tipoServico, OS.valor, OS.observacao, OS.qtdPeca, OS.peca
                    from ordemServico OS left join cliente cli
                        on cli.idCliente = OS.cliente
                        where statusServico != 'Desativada' and 
                        statusServico != 'Finalizado' ";
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
                                            <span id=""><?= $ordemServico['nome']?></span>
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
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="row modal-content">
                                        <div class="col-12 modal-header">
                                            <h3 class="col-11 modal-title" id="myModalLabel" style="text-align: center; margin: auto; font-weight: bold">Ordem de Serviço</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="text-align: end;">
                                                <i class="fas fa-solid fa-circle-xmark" style="color: #000000;"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body" style="margin-top: -25px">                                            
                                            <section class="section-content">  
                                                <form enctype="multipart/form-data" action="../models/Code_ordem_servico.php" method="POST">

                                                    <input type="hidden" name="idOrdemServico" value="<?= $ordemServico['idOrdemServico']?>">

                                                    <div class="row">
                                                        <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                                            <div class="col-6">
                                                                <label for="placa">Placa:</label>
                                                                <input type="text" name="placa" value=" <?= $ordemServico['placa'];?> " class="form-control p-2 campoDigitar">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="prazoEntrega">Prazo de entrega:</label>
                                                                <input type="date" name="prazoEntrega" value="<?= $ordemServico['prazoEntrega']?>" class="form-control campoDigitar">
                                                            </div>
                                                        </div>

                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                            <div class="col-6">
                                                                <label for="anoVeiculo">Ano do Automóvel:</label>
                                                                <input type="text" name="anoVeiculo" value=" <?= $ordemServico['anoVeiculo'];?> " class="form-control campoDigitar">
                                                            </div>   
                                                            <div class="col-6">
                                                                <label for="nomeVeiculo">Modelo do Automóvel:</label>
                                                                <input type="text" name="nomeVeiculo" value=" <?= $ordemServico['nomeVeiculo'];?> " class="form-control campoDigitar">
                                                            </div> 
                                                        </div>
                                        
                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                            <div class="col-6">
                                                                <label for="Cliente">Cliente</label>
                                                                <select name="cliente" class="SelectServicoCadasServico" id="inputGroupSelect01">
                                                                    <?php 
                                                                        $query = "SELECT idCliente, CPF, nome FROM cliente ";
                                                                        $query_run = mysqli_query($con, $query);

                                                                        if (mysqli_num_rows($query_run) > 0){

                                                                            foreach($query_run as $cliente){

                                                                                ?>
                                                                                <option value="<?= $cliente['idCliente']?>";><?= $cliente['CPF'] . " - " . $cliente['nome']?></option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="valor">Valor:</label>
                                                                <input type="text" name="valor" value=" <?= $ordemServico['valor'];?> " class="form-control campoDigitar">
                                                            </div>                                                        
                                                        </div>


                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                            <div class="col-6">
                                                                <label for="pecaUsada">Peças Utilizadas:</label>  
                                                                <select name="pecaUsada" class="SelectServicoCadasServico">
                                                                    <?php 
                                                                        $query = "SELECT idPeca, nomePeca FROM pecas ORDER BY nomePeca ASC ";
                                                                        $query_run = mysqli_query($con, $query);

                                                                        if (mysqli_num_rows($query_run) > 0){

                                                                            foreach($query_run as $pecas){

                                                                                ?>
                                                                                <option value="<?= $pecas['idPeca']?>";><?= $pecas['idPeca'] . " - " . $pecas['nomePeca']?></option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="qtdPeca">Quantidade de Peças:</label>  
                                                                <input type="text" name="qtdPeca" value=" <?= $ordemServico['qtdPeca'];?> " class="form-control campoDigitarCadasServico">
                                                            
                                                            </div>
                                                        </div>


                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">                                                        
                                                            <div class="col-6">
                                                                <label>Serviço:</label>  
                                                                <select name="tipoServico" class="SelectServicoCadasServico">
                                                                    <option selected><?= $ordemServico['tipoServico'];?></option>
                                                                    <option value="Troca de Pneu">Troca de Pneu</option>
                                                                    <option value="Troca Suspensao">Troca de conjunto de Suspensão</option>
                                                                    <option value="Troca de Fluidos">Troca de Fluidos</option>
                                                                    <option value="Troca de Vela">Troca de cabos de Vela</option>
                                                                    <option value="Revisao da Eletrica">Revisão Elétrica</option>
                                                                    <option value="Retifica do motor">Retifica de motor</option>
                                                                    <option value="Troca do Cabecote">Troca de Cabeçote</option>
                                                                    <option value="Manutencao do Cambio">Manutenção de Câmbio</option>
                                                                    <option value="Alinhamento">Alinhamento</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="nomeSelectServico">Estatus:</label>  
                                                                <select name="statusServico" class="SelectServicoCadasServico">
                                                                    <option ><?= $ordemServico['statusServico']?></option>
                                                                    <option value="Iniciado">Iniciado</option>
                                                                    <option value="Em Andamento">Em andamento</option>
                                                                </select>
                                                            </div>         
                                                        </div>

                                                        <div class="col-12" style="display: flex; margin-bottom: 20px;">
                                                            <div class="col-12">
                                                                <label for="username">Observação</label>
                                                                <textarea class="p-2 campoObservacoes" name="observacao" rows="6" cols="50"><?= $ordemServico['observacao'];?></textarea>
                                                            </div>                  
                                                        </div> 
                    
                                                    </div>  
                                                    
                                                    <div class="modal-footer"> 
                                                        <button name="delete_ordem_servico" type="submit"  class="botaoDeleteOrdem"  value="<?= $ordemServico['idOrdemServico'];?>">Deletar Ordem</button>
                                                        <button name="finaliza_ordem_servico" type="submit"  class="botaoFinalizaOrdem"  value="<?= $ordemServico['idOrdemServico'];?>">Finalizar Ordem</button>
                                                        <button name="update_ordem_servico" type="submit"  class="botaoSalvarOrdem" >Salvar Alterações</button>
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

                    $query = "SELECT cli.nome, OS.idOrdemServico, OS.placa,
                    OS.nomeVeiculo, OS.prazoEntrega, OS.statusServico,
                    OS.anoVeiculo, OS.tipoServico, OS.valor, OS.observacao, OS.qtdPeca, OS.peca
                    from ordemServico OS left join cliente cli
                        on cli.idCliente = OS.cliente
                        where statusServico = 'Finalizado'";
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
                                            <span id=""><?= $ordemServico['nome']?></span>
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
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="row modal-content">
                                        <div class="col-12 modal-header">
                                            <h3 class="col-11 modal-title" id="myModalLabel" style="text-align: center; margin: auto; font-weight: bold">Ordem de Serviço - Finalizada</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="text-align: end;">
                                                <i class="fas fa-solid fa-circle-xmark" style="color: #000000;"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body" style="margin-top: -25px">                                            
                                            <section class="section-content">  
                                                <form enctype="multipart/form-data" action="../models/Code_ordem_servico.php" method="POST" class="col-12 col-lg-12">

                                                    <input type="hidden" name="idOrdemServico" value="<?= $ordemServico['idOrdemServico']?>">

                                                    <div class="row">
                                                        <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                                            <div class="col-6">
                                                                <label for="placa">Placa:</label>
                                                                <input type="text" name="placa" value=" <?= $ordemServico['placa'];?> " class="form-control p-2 campoDigitar">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="prazoEntrega">Prazo de entrega:</label>
                                                                <input type="date" name="prazoEntrega" value="<?= $ordemServico['prazoEntrega']?>" class="form-control campoDigitar">
                                                            </div>
                                                        </div>

                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                            <div class="col-6">
                                                                <label for="anoVeiculo">Ano do Automóvel:</label>
                                                                <input type="text" name="anoVeiculo" value=" <?= $ordemServico['anoVeiculo'];?> " class="form-control campoDigitar">
                                                            </div>   
                                                            <div class="col-6">
                                                                <label for="nomeVeiculo">Modelo do Automóvel:</label>
                                                                <input type="text" name="nomeVeiculo" value=" <?= $ordemServico['nomeVeiculo'];?> " class="form-control campoDigitar">
                                                            </div> 
                                                        </div>
                                        
                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                            <div class="col-6">
                                                                <label for="Cliente">Cliente</label>
                                                                <select name="cliente" class="SelectServicoCadasServico" id="inputGroupSelect01">
                                                                    <?php 
                                                                        $query = "SELECT idCliente, CPF, nome FROM cliente ";
                                                                        $query_run = mysqli_query($con, $query);

                                                                        if (mysqli_num_rows($query_run) > 0){

                                                                            foreach($query_run as $cliente){

                                                                                ?>
                                                                                <option value="<?= $cliente['idCliente']?>";><?= $cliente['CPF'] . " - " . $cliente['nome']?></option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="valor">Valor:</label>
                                                                <input type="text" name="valor" value=" <?= $ordemServico['valor'];?> " class="form-control campoDigitar">
                                                            </div>                                                        
                                                        </div>


                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">

                                                            <div class="col-6">
                                                                <label for="pecaUsada">Peças Utilizadas:</label>  
                                                                <select name="pecaUsada" class="SelectServicoCadasServico">
                                                                    <?php 
                                                                        $query = "SELECT idPeca, nomePeca FROM pecas ORDER BY nomePeca ASC ";
                                                                        $query_run = mysqli_query($con, $query);

                                                                        if (mysqli_num_rows($query_run) > 0){

                                                                            foreach($query_run as $pecas){

                                                                                ?>
                                                                                <option value="<?= $pecas['idPeca']?>";><?= $pecas['idPeca'] . " - " . $pecas['nomePeca']?></option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="qtdPeca">Quantidade de Peças:</label>  
                                                                <input type="text" name="qtdPeca" value=" <?= $ordemServico['qtdPeca'];?> " class="form-control campoDigitarCadasServico">
                                                            
                                                            </div>
                                                        </div>


                                                        <div class="col-12" style="display: flex; margin-bottom: 30px;">                                                        
                                                            <div class="col-6">
                                                                <label>Serviço:</label>  
                                                                <select name="tipoServico" class="SelectServicoCadasServico">
                                                                    <option selected><?= $ordemServico['tipoServico'];?></option>
                                                                    <option value="Troca de Pneu">Troca de Pneu</option>
                                                                    <option value="Troca Suspensao">Troca de conjunto de Suspensão</option>
                                                                    <option value="Troca de Fluidos">Troca de Fluidos</option>
                                                                    <option value="Troca de Vela">Troca de cabos de Vela</option>
                                                                    <option value="Revisao da Eletrica">Revisão Elétrica</option>
                                                                    <option value="Retifica do motor">Retifica de motor</option>
                                                                    <option value="Troca do Cabecote">Troca de Cabeçote</option>
                                                                    <option value="Manutencao do Cambio">Manutenção de Câmbio</option>
                                                                    <option value="Alinhamento">Alinhamento</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="nomeSelectServico">Estatus:</label>  
                                                                <select name="statusServico" class="SelectServicoCadasServico">
                                                                    <option ><?= $ordemServico['statusServico']?></option>
                                                                    <option value="Iniciado">Iniciado</option>
                                                                    <option value="Em Andamento">Em andamento</option>
                                                                </select>
                                                            </div>         
                                                        </div>

                                                        <div class="col-12" style="display: flex; margin-bottom: 20px;">
                                                            <div class="col-12">
                                                                <label for="username">Observação</label>
                                                                <textarea class="p-2 campoObservacoes" name="observacao" rows="6" cols="50"><?= $ordemServico['observacao'];?></textarea>
                                                            </div>                  
                                                        </div> 
                    
                                                    </div> 
                                                    
                                                    <div class="modal-footer"> 
                                                        <button type="submit" name="delete_ordem_servico" class="botaoDeleteOrdem" style="padding: 12px 30px;  border-radius: 12px;" value="<?= $ordemServico['idOrdemServico'];?>">Deletar Ordem</button>
                                                        <button type="submit" name="update_ordem_servico" class="botaoSalvarOrdem" style="padding: 12px 30px;  border-radius: 12px;">Salvar Alterações</button>
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