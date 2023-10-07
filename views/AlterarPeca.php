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
    <title>Alterar Peças</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    

    <main class="main-content">  
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite text-center">Alterar informações da peça</p>
            </div>
        </div>     

        <section class="section-content">  
            <form>
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                        <div class="col-6">
                            <label for="username">Código da Peça:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="username">Nome da Peça:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                                         
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Marca:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="username">Quantidade:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>                   
                    </div>
                    
                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">CNPJ do Fornecedor:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>

                        <div class="col-6">
                            <label for="username">Nome do Fornecedor:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Contato do Fornecedor:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>

                        <div class="col-6">
                            <label for="username">Data do Pedido:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                    </div>
                    
                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Data do Recebicemento:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>
                        <div class="col-6">
                            <label for="username">Adicione imagens da peça:</label>
                            <input type="text" name="username" class="form-control campoDigitar">
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="username">Descrição:</label>
                            <textarea class="campoObservacoes" name="observacoes" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button type="button" class="botaoOrdem">
                            Salvar Alterações
                        </button>
                    </div>                    
                </div>            
                
            </form>
        </section>

    </main>
    
    <!-- Modal de Alteração -->
    <div class="modal fade" id="modalAlterarOrdemServico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Alterar Campos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        
                    


                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>