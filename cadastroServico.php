<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Serviço</title>
    <link rel="shortcut icon" type="imagex/png" href="images/icon.volante.svg">
</head>

<body>

    <?php include ('utils/header.php'); ?>

    <main>       

        <section>

        <div class="row">
            <div class="col-12 divOrdemServico">
                <p class="nameOrdemServico">Cadastro de Serviço</p>
            </div>
        </div>
        

            <form>
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                        <div class="col-6">
                            <label for="username">Placa do Automóvel:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                           
                        <div class="col-6">
                            <label for="username">Modelo do Automóvel:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                                        
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">Ano do Automóvel:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>
                        <div class="col-6">
                            <label for="username">Nome do Cliente:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                  
                    </div>
                    
                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                        <div class="col-6">
                            <label for="username">CPF do Cliente:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div> 
                        <div class="col-6">
                            <label for="nomeSelectServico">Serviço:</label>  
                            <select name="select" class="SelectServicoCadasServico">
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
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>
                        <div class="col-6">
                            <label for="username">Prazo de entrega:</label>
                            <input type="text" name="username" class="form-control campoDigitarCadasServico">
                        </div>                   
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="username">Observação:</label>
                            <textarea class="campoObservacoesCadasServico" name="observacoes" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12 text-right">
                        <button type="submit" class="botaoOrdem">Salvar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>