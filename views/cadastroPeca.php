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

    <?php include ('../utils/header.php'); ?>

    <main class="main-content">   
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Cadastro de Peça</p>
            </div>
        </div>    

        <section class="section-content">
            <form>
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                        <div class="col-6">
                            <label for="codpeca">Código Peça:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                           
                        <div class="col-6">
                            <label for="nomepeça">Nome Peça:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                                        
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="marca">Marca:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>
                        <div class="col-6">
                            <label for="quantidade">Quantidade:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                  
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="cnpjfornecedor">CNPJ do Fornecedor:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>
                        <div class="col-6">
                            <label for="nomefornecedor">Nome do Fornecedor:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="telefone">Contato do Fornecedor:</label>
                            <input type="tel" id="telefone" class="form-control campoDigitarCadasServico" required placeholder="(xx) xxxxx-xxxx">
                        </div>
                        <div class="col-6">
                            <label for="datapedido">Data de Pedido:</label>
                            <input type="date" name="username" class="form-control campoDigitarCadasServico">
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="datarecebimento">Data Recebimento:</label>
                            <input type="date" name="username" class="form-control campoDigitarCadasServico">
                        </div>
                        <div class="col-6">
                            <label for="fotopeca">Adicione imagens da peça:</label>
                            <div class="input-group">
                                <input type="file" class="form-control" style = "border: none;" accept="image/*">
                                <button class="btn btn-outline-secondary excluirFoto, border-0" type ="reset">X</button>
                            </div>
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="username">Descrição:</label>
                            <textarea class="campoObservacoesCadasServico" name="descricoes" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button type="submit" class="botaoOrdem">Cadastrar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>