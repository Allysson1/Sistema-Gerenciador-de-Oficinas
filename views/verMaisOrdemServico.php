<?php
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Ordem de Serviço</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    <?php include ('../utils/header.php'); ?>

    <main class="main-content">  
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Ordem de Serviço</p>
            </div>
        </div>     

        <section class="section-content">  
            <form>
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                        <div class="col-6">
                            <label for="username">Placa do Carro:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="nomeSelectStatus">Status:</label>  
                            <select name="select" class="selectStatus">
                                <option value="#" selected disabled>Selecione....</option>
                                <option value="valor2">Iniciando</option>
                                <option value="valor2">Em andamento</option>
                                <option value="valor3">Fianlizado</option>
                            </select>
                        </div>                    
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Nome do Cliente:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="username">Modelo do Automóvel:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>                   
                    </div>
                    
                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Ano do Automóvel:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="nomeSelectServico">Serviço:</label>  
                            <select name="select" class="SelectServico">
                                <option value="#" selected disabled>Selecione....</option>
                                <option value="valor2">Iniciando</option>
                                <option value="valor2">Em andamento</option>
                                <option value="valor3">Fianlizado</option>
                            </select>
                        </div>                    
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Valor:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="username">Prazo de entrega:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="username">Observação:</label>
                            <textarea class="campoObservacoes" name="observacoes" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button type="button" class="botaoOrdem" data-toggle="modal" data-target="#modalAlterarOrdemServico">
                            Alterar
                        </button>
                    </div>                    
                </div>            
                
            </form>
        </section>

    </main>
    
    <!-- Modal de Alteração -->
    <div class="modal fade" id="modalAlterarOrdemServico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="row modal-content">
                <div class="col-12 modal-header">
                    <h5 class="col-11 modal-title" id="myModalLabel" style="text-align: center; margin: auto; font-weight: bold">Alterar Ordem de Serviço</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="text-align: end;">
                        <i class="fas fa-solid fa-circle-xmark" style="color: #000000;"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 15px">
                                <div class="col-6">
                                    <label for="username">Placa do Carro:</label>
                                    <input type="text" name="username" class="form-control campoDigitar">
                                </div>
                                <div class="col-6">
                                    <label for="nomeSelectStatus">Status:</label>  
                                    <select name="select" class="selectStatus">
                                        <option value="#" selected disabled>Selecione....</option>
                                        <option value="valor2">Iniciando</option>
                                        <option value="valor2">Em andamento</option>
                                        <option value="valor3">Fianlizado</option>
                                    </select>
                                </div>                    
                            </div>

                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                <div class="col-6">
                                    <label for="username">Nome do Cliente:</label>
                                    <input type="text" name="username" class="form-control campoDigitar">
                                </div>
                                <div class="col-6">
                                    <label for="username">Modelo do Automóvel:</label>
                                    <input type="text" name="username" class="form-control campoDigitar">
                                </div>                   
                            </div>
                            
                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                <div class="col-6">
                                    <label for="username">Ano do Automóvel:</label>
                                    <input type="text" name="username" class="form-control campoDigitar">
                                </div>
                                <div class="col-6">
                                    <label for="nomeSelectServico">Serviço:</label>  
                                    <select name="select" class="SelectServico">
                                        <option value="#" selected disabled>Selecione....</option>
                                        <option value="valor2">Iniciando</option>
                                        <option value="valor2">Em andamento</option>
                                        <option value="valor3">Fianlizado</option>
                                    </select>
                                </div>                    
                            </div>

                            <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                <div class="col-6">
                                    <label for="username">Valor:</label>
                                    <input type="text" name="username" class="form-control campoDigitar">
                                </div>
                                <div class="col-6">
                                    <label for="username">Prazo de entrega:</label>
                                    <input type="text" name="username" class="form-control campoDigitar">
                                </div>                   
                            </div>

                            <div class="col-12" style="display: flex; margin-bottom: 20px;">
                                <div class="col-12">
                                    <label for="username">Observação:</label>
                                    <textarea class="campoObservacoes" name="observacoes" rows="6" cols="50"></textarea>
                                </div>                  
                            </div>   
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="botaoOrdem" style="padding: 12px 50px;  border-radius: 12px; ">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>