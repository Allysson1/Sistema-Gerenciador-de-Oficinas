<?php
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
                            <label for="nomeSelectServico">Estatus:</label>  
                            <select name="statusServico" class="SelectServicoCadasServico">
                                <option selected>Selecione o Status....</option>
                                <option value="Iniciado">Iniciado</option>
                                <option value="Em Andamento">Em andamento</option>
                                <option value="Finalizado">Fianlizado</option>
                            </select>
                        </div>    
                                     
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6">
                        <label for="Cliente">Cliente</label>
                            <select name="cliente" class="custom-select bg-dark text-white" id="inputGroupSelect01">
                                <option selected>Selecione o Cliente...</option>
                                <option value="1">Um</option>
                                <option value="2">Dois</option>
                                <option value="3">Três</option>
                            </select>
                        </div>   

                        <div class="col-6">
                            <label for="nomeVeiculo">Modelo do Automóvel:</label>
                            <input type="text" name="nomeVeiculo" class="form-control campoDigitarCadasServico">
                        </div>   

                                        
                    </div>
                    
                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                    <div class="col-6">
                            <label for="anoVeiculo">Ano do Automóvel:</label>
                            <input type="text" name="anoVeiculo" class="form-control bg-dark text-white campoDigitarCadasServico">
                        </div> 

                        <div class="col-6">
                            <label>Serviço:</label>  
                            <select name="tipoServico" class="SelectServicoCadasServico">
                                <option selected>Selecione o serviço....</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>  
                                        
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="valor">Valor:</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">R$</span>
                                <input type="text" name="valor" class="form-control campoDigitarCadasServico">
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="prazoEntrega">Prazo de entrega:</label>
                            <input type="date" name="prazoEntrega" class="form-control bg-dark text-white campoDigitarCadasServico">
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="observacao">Observação:</label>
                            <textarea class="campoObservacoesCadasServico" name="observacao" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button name="save_ordemServico" type="submit" class="botaoOrdem">Salvar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>