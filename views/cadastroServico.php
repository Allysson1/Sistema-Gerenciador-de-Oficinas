<?php
    require('../utils/conexao.php');
    include('../utils/protect.php');
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 2;

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
    <title>Cadastro de Serviço</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    <?php include ('../utils/header.php'); ?>

    <main class="main-content">   
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Cadastro de Serviço</p>
            </div>
        </div>    

        <?php include ('../utils/message.php'); ?>

        <section class="section-content">
            <form action="../models/Code_ordem_servico.php" method="POST">
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">

                        <div class="col-6">
                            <label for="placa">Placa do Automóvel:</label>
                            <input type="text" name="placa" class="form-control campoDigitarCadasServico">
                        </div>   
                        
                        <div class="col-6">
                            <label for="prazoEntrega">Prazo de entrega:</label>
                            <input type="date" name="prazoEntrega" class="form-control campoDigitarCadasServico">
                        </div>    
                                     
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="anoVeiculo">Ano do Automóvel:</label>
                            <input type="text" name="anoVeiculo" class="form-control campoDigitarCadasServico">
                        </div> 

                        <div class="col-6">
                            <label for="nomeVeiculo">Modelo do Automóvel:</label>
                            <input type="text" name="nomeVeiculo" class="form-control campoDigitarCadasServico">
                        </div>                                           
                    </div>
                    
                    <div class="col-12" style="display: flex; margin-bottom: 30px;">                    
                        <div class="col-6">
                            <label for="Cliente">Cliente</label>
                            <select name="cliente" class="SelectServicoCadasServico" id="inputGroupSelect01">
                                <option selected>Selecione o Cliente...</option>
                                <option value="um">Um</option>
                                <option value="2">Dois</option>
                                <option value="3">Três</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="valor">Valor:</label>
                            <input type="text" name="valor" class="form-control campoDigitarCadasServico">
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
                            <input type="text" name="qtdPeca" class="form-control campoDigitarCadasServico">
                            
                            
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        
                            <div class="col-6">
                                <label>Serviço:</label>  
                                <select name="tipoServico" class="SelectServicoCadasServico">
                                    <option selected>Selecione o serviço....</option>
                                    <option value="TrocaPneu">Troca de Pneu</option>
                                    <option value="TrocaSuspensao">Troca de conjunto de Suspensão</option>
                                    <option value="TrocaFluidos">Troca de Fluidos</option>
                                    <option value="TrocaVela">Troca de cabos de Vela</option>
                                    <option value="RevisaoEletrica">Revisão Elétrica</option>
                                    <option value="Retificamotor">Retifica de motor</option>
                                    <option value="TrocaCabecote">Troca de Cabeçote</option>
                                    <option value="ManutencaoCambio">Manutenção de Câmbio</option>
                                    <option value="Alinhamento">Alinhamento</option>
                                </select>
                            </div>  
                            
                            
                            <div class="col-6">
                                <label for="nomeSelectServico">Estatus:</label>  
                                <select name="statusServico" class="SelectServicoCadasServico">
                                    <option selected>Selecione o Status....</option>
                                    <option value="Iniciado">Iniciado</option>
                                    <option value="Em Andamento">Em andamento</option>
                                    <option value="Finalizado">Fianlizado</option>
                                </select>
                            </div>
            
                    </div>



                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="observacao">Observação:</label>
                            <textarea class="campoObservacoesCadasServico" name="observacao" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button name="save_ordemServico" type="submit" class="botaoCadastroServico">Salvar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>