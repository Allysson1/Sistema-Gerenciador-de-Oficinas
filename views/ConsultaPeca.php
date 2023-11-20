<?php

    require ('../utils/conexao.php');
   
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 3;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <title>Consultar Peças</title>
        <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
    </head>

    <body>

        <?php include ('../utils/message.php'); ?>

        <?php include ('../utils/header.php'); ?>

        <main class="main-content">
            <div class="row">
                <div class="col-12 divHeaderTopoSite">
                    <p class="nameHeaderTopoSite">Consulta de Peças</p>
                </div>
            </div>

            <section class="section-content">

                <div class="row" style="margin: 0px">
                    <div class="containerPesquisaHome ml-auto">
                        <div class="col-12">
                            <input
                                type="text"
                                class="inputPesquisaHome"
                                placeholder="Digite o código ou nome da placa...">
                        </div>
                    </div>
                </div>

            <div class="row" style="margin: 0px">

                <?php

                    $query = "SELECT * FROM pecas";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run) > 0) {
                        
                        foreach ($query_run as $pecas) {
                            

                ?>
                
                <div class="col-sm-4 col-4">
                    <div class="cardPeca">

                        <div class="todosItensCard">
                            <div class="text-center">
                                <img
                                    src="<?=$pecas['Path'] ?>"
                                    class="img-fluid rounded pb-3"
                                    alt="..." width="250px" height="200px">
                            </div>
                            <div class="pl-2 itemCard">
                                <span>Código:</span>
                                <span id=""><?=$pecas['idPeca'] ?></span>
                            </div>
                            <div class="pl-2 itemCard">
                                <span>Nome:</span>
                                <span id=""><?=$pecas['NomePeca'] ?></span>
                            </div>
                            <div class="pl-2 itemCard">
                                <span>Quantidade:</span>
                                <span id=""><?=$pecas['QtdPeca'] ?> - Em estoque</span>
                            </div>
                            <div class="pl-2 itemCard">
                                <span>Marca:</span>
                                <span id=""><?=$pecas['MarcaPeca'] ?></span>
                            </div> 

                            <button type="button" class="verMaisPeca" data-toggle="modal" data-target="#exampleModal<?= $pecas['idPeca'];?>">
                                Ver mais...
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $pecas['idPeca'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="row modal-content">
                            <div class="col-12 modal-header">
                                <h3 class="col-11 modal-title" id="myModalLabel" style="text-align: center; margin: auto; font-weight: bold">Informações da Peça</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="text-align: end;">
                                    <i class="fas fa-solid fa-circle-xmark" style="color: #000000;"></i>
                                </button>
                            </div>
                            
                                
                        <section class="section-content">  
                            <form enctype="multipart/form-data" action="../models/Code_Peca.php" method="POST">
                            <div class="modal-body" style="margin-top: -25px">                                    
                                <section class="section-content">  
                                    <form enctype="multipart/form-data" action="../models/Code_Peca.php" method="POST" class="col-12 col-lg-12">

                                        <div class="row">
                                            <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                                <div class="col-6">
                                                    <label for="username">Código da Peça:</label>
                                                    <input type="text" name="idPeca" value=" <?= $pecas['idPeca'];?> " class="form-control p-2 campoDigitarCodPeca" readonly>
                                                </div>
                                                <div class="col-6">
                                                    <label for="username">Nome da Peça:</label>
                                                    <input type="text" name="NomePeca" value="<?=$pecas['NomePeca'];?>" class="form-control p-2 campoDigitar">
                                                </div>
                                                
                                            </div>

                                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                <div class="col-6">
                                                    <label for="username">Marca:</label>
                                                    <input type="text" name="MarcaPeca" value="<?=$pecas['MarcaPeca'];?>" class="form-control p-2 campoDigitar">
                                                </div>
                                                <div class="col-6">
                                                    <label for="username">Quantidade:</label>
                                                    <input type="text" name="QtdPeca" value="<?=$pecas['QtdPeca'];?>" class="form-control p-2 campoDigitar">
                                                </div>                   
                                            </div>
                            
                                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                <div class="col-6">
                                                    <label for="username">CNPJ do Fornecedor:</label>
                                                    <input type="text" name="CnpjFornecedor" value="<?=$pecas['CnpjFornecedor'];?>"  class="form-control p-2 campoDigitar">
                                                </div>

                                                <div class="col-6">
                                                    <label for="username">Nome do Fornecedor:</label>
                                                    <input type="text" name="NomeFornecedor"  class="form-control p-2 campoDigitar">
                                                </div>
                                            </div>

                                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                <div class="col-6">
                                                    <label for="username">Contato do Fornecedor:</label>
                                                    <input type="text" name="TelFornecedor" class="form-control p-2 campoDigitar" required placeholder="(xx) xxxxx-xxxx">
                                                </div>

                                                <div class="col-6">
                                                    <label for="username">Data do Pedido:</label>
                                                    <input type="date" name="DataPedido" value="<?=$pecas['DataPedido'];?>" class="form-control p-2 campoDigitar">
                                                </div>
                                            </div>
                            
                                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                                <div class="col-6">
                                                    <label for="username">Data do Recebimento:</label>
                                                    <input type="date" name="DataRecebimento" value="<?=$pecas['DataRecebimento'];?>" class="form-control p-2 campoDigitar">
                                                </div>
                                                <div class="col-6">
                                                    <label for="username">Adicione imagens da peça:</label>
                                                    <div class="input-group">

                                                        <input type="file" class="form-control" style = "border: none;" accept="image/*">
                                                        <button class="btn btn-outline-secondary excluirFoto, border-0" type ="reset">X</button>
                                                    
                                                    </div>
                                                </div>                   
                                            </div>

                                            <div class="col-12" style="display: flex; margin-bottom: 20px;">
                                                    <div class="col-12">
                                                        <label for="username">Especificações técnicas:</label>
                                                        <textarea class="p-2 campoObservacoes"  name="DescricaoPeca" rows="6" cols="50"><?=$pecas['DescricaoPeca'];?></textarea>
                                                    </div>                  
                                            </div>                      
                                        </div>
                        
                                    </form>
                                </section>
                                <div class="modal-footer"> 
                                    <button type="submit" name="deletePeca" class="botaoDeletePeca" style="padding: 12px 40px;  border-radius: 12px;" >Deletar Peça</button>
                                    <button type="submit" name="UpdatePeca" class="botaoSalvarPeca" style="padding: 12px 40px;  border-radius: 12px;">Salvar Alterações</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                            }
                        }
                        else{
                            echo "<h5> Nenhuma peça cadastrada ! </h5>";
                        }


                ?>   
        </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary btn-lg p-3   ">Ver mais peças...</button>
                    </div>
                </div>            
            </section>

        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    </body>
</html>