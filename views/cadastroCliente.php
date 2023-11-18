<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro de Cliente</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    <?php include ('../utils/message.php'); ?>

    <?php include ('../utils/header.php'); ?>

    <main class="main-content">   
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Cadastro de Cliente</p>
            </div>
        </div>    

        <section class="section-content">

            

        <form method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">

                        <div class="col-6">
                            <label for="nomecliente">Nome do Cliente:</label>
                            <input type="text" name="NomeCliente" class="form-control p-2 campoPeca  ">
                        </div>          
                    
                        <div class="col-6">
                            <label for="cpfcliente">CPF do Cliente:</label>
                            <input type="text" name="CpfCliente" class="form-control p-2 campoPeca" placeholder="xxx.xxx.xxx-xx">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6">
                            <label for="telefone">Contato do Cliente:</label>
                            <input type="tel" name="TelCliente" class="form-control p-2 campoPeca" required placeholder="(xx) xxxxx-xxxx">
                        </div>                   

                        <div class="col-6">
                            <label for="enderecocliente">Endereço do Cliente:</label>
                            <input type="text" name="EnderecoCliente" class="form-control p-2 campoPeca  ">
                        </div> 
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6">
                            <label for="cidadecliente">Cidade:</label>
                            <input type="text" name="CidadeCliente" class="form-control p-2 campoPeca  ">
                        </div>   
                        
                        <div class="col-6">
                            <label for="nomeSelectCliente">Estado:</label>  
                            <select name="select" class="SelectServicoCadasServico">
                                <option value="#" selected disabled>Selecione o estado...</option>
                                <option value="AC">Acre</option>
                                <option value=" AL "> Alagoas </option>
                                <option value=" AP "> Amapá </option>
                                <option value=" AM "> Amazonas </option>
                                <option value=" BA "> Bahia </option>
                                <option value=" CE "> Ceará </ option>
                                <option value=" DF "> Distrito Federal </option>
                                <option value=" ES "> Espírito Santo </option>
                                <option value=" GO "> Goiás </option>
                                <option value=" MA "> Maranhão </option>
                                <option value=" MT "> Mato Grosso </option>
                                <option value=" MS "> Mato Grosso do Sul </option>
                                <option value=" MG "> Minas Gerais </option>
                                <option value=" PA "> Pará </option>
                                <option value=" PB "> Paraíba </option>
                                <option value=" PR "> Paraná </option>
                                <option value=" PE "> Pernambuco </option>
                                <option value=" PI "> Piauí </option>
                                <option value=" RJ "> Rio de Janeiro </option>
                                <option value=" RN "> Rio Grande do Norte </option>
                                <option value=" RS "> Rio Grande do Sul </option>
                                <option value=" RO "> Rondônia </option>
                                <option value=" RR "> Roraima </option>
                                <option value=" SC "> Santa Catarina </option>
                                <option value=" SP "> São Paulo </option>
                                <option value=" SE "> Sergipe </option>
                                <option value=" TO "> Tocantins </option>
                                <option value=" EX "> Estrangeiro </option>
                            </select>

                        </div>                    
                    </div>

                    <div class="col-12 text-right">
                        <button type="submit" name="SaveCliente" class="botaoOrdem">Cadastrar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>