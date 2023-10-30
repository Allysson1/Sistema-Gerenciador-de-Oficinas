<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro de Peça</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    <?php include ('../utils/message.php'); ?>

    <?php include ('../utils/header.php'); ?>

    <main class="main-content">   
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Cadastro de Peça</p>
            </div>
        </div>    

        <section class="section-content">

            

            <form enctype="multipart/form-data" action="../models/Code_Peca.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                        <!-- <div class="col-6">
                            <label for="codpeca">Código Peça:</label>
                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                        </div>                            -->
                        <div class="col-6">
                            <label for="nomepeça">Nome da Peça:</label>
                            <input type="text" name="NomePeca" class="form-control p-2 campoDigitar">
                        </div>         

                        <div class="col-6">
                            <label for="marca">Marca:</label>
                            <input type="text" name="MarcaPeca" class="form-control p-2 campoDigitar   ">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
   
                        <div class="col-6">
                            <label for="quantidade">Quantidade:</label>
                            <input type="text" name="QtdPeca" class="form-control p-2 campoDigitar ">
                        </div>       
                        <div class="col-6">
                            <label for="cnpjfornecedor">CNPJ do Fornecedor:</label>
                            <input type="text" name="CnpjFornecedor" class="form-control p-2 campoDigitar  ">
                        </div>           
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6">
                            <label for="nomefornecedor">Nome do Fornecedor:</label>
                            <input type="text" name="NomeFornecedor" class="form-control p-2 campoDigitar  ">
                        </div>   
                        
                        <div class="col-6">
                            <label for="telefone">Contato do Fornecedor:</label>
                            <input type="tel" name="TelFornecedor" class="form-control p-2 campoDigitar" required placeholder="(xx) xxxxx-xxxx">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6">
                            <label for="datapedido">Data de Pedido:</label>
                            <input type="date" name="DataPedido" class="form-control p-2 campoDigitar  ">
                        </div>  
                        
                        <div class="col-6">
                            <label for="datarecebimento">Data Recebimento:</label>
                            <input type="date" name="DataRecebimento" class="form-control p-2 campoDigitar ">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6 left">
                            <label for="fotopeca">Adicione imagens da peça:</label>
                            <div class="input-group">
                                <input type="file" name="ImagemPeca" class="form-control p-2" style = "border: none;" accept="image/*">
                                <button class="btn btn-outline-secondary excluirFoto, border-0" type ="reset">X</button>
                            </div>
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="username">Descrição:</label>
                            <textarea class="campoObservacoesCadasServico" name="DescricaoPeca" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button type="submit" name="SavePeca" class="botaoOrdem">Cadastrar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>