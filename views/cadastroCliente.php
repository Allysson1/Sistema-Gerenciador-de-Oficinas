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
    <title>Cadastro de Cliente</title>
    <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
</head>

<body>

    

    <?php include ('../utils/header.php'); ?>

    <main class="main-content">   
        <div class="row">
            <div class="col-12 divHeaderTopoSite">
                <p class="nameHeaderTopoSite">Cadastro de Cliente</p>
            </div>
        </div>    

        <section class="section-content">

        <?php include ('../utils/message.php'); ?>

            

        <form action= "../models/Code_Cliente.php" method="POST" >
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">

                        <div class="col-6">
                            <label for="nomecliente">Nome do Cliente:</label>
                            <input type="text" name="nomeCliente" class="form-control p-2 campoPeca  ">
                        </div>          
                    
                        <div class="col-6">
                            <label for="cpfCliente">CPF do Cliente:</label>
                            <input type="text" name="cpfCliente" class="form-control p-2 campoPeca" placeholder="xxx.xxx.xxx-xx">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6">
                            <label for="contato">Telefone do Cliente:</label>
                            <input type="tel" name="contato" class="form-control p-2 campoPeca" required placeholder="(xx) xxxxx-xxxx">
                        </div> 

                        <div class="col-6">
                            <label for="endereco">Endereço do Cliente:</label>
                            <input type="text" name="endereco" class="form-control p-2 campoPeca  ">
                        </div> 
                        
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">                        
                        <div class="col-6">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" class="form-control p-2 campoPeca  ">
                        </div>  
                        
                        <div class="col-6">
                            <label for="estado">Estado:</label>  
                            <select name="estado" class="SelectServicoCadasServico">
                                <option selected disabled>Selecione o estado...</option>
                                <option value="AC">Acre</option>
                                <option value="AL"> Alagoas </option>
                                <option value="AP"> Amapá </option>
                                <option value="AM"> Amazonas </option>
                                <option value="BA"> Bahia </option>
                                <option value="CE"> Ceará </ option>
                                <option value="DF"> Distrito Federal </option>
                                <option value="ES"> Espírito Santo </option>
                                <option value="GO"> Goiás </option>
                                <option value="MA"> Maranhão </option>
                                <option value="MT"> Mato Grosso </option>
                                <option value="MS"> Mato Grosso do Sul </option>
                                <option value="MG"> Minas Gerais </option>
                                <option value="PA"> Pará </option>
                                <option value="PB"> Paraíba </option>
                                <option value="PR"> Paraná </option>
                                <option value="PE"> Pernambuco </option>
                                <option value="PI"> Piauí </option>
                                <option value="RJ"> Rio de Janeiro </option>
                                <option value="RN"> Rio Grande do Norte </option>
                                <option value="RS"> Rio Grande do Sul </option>
                                <option value="RO"> Rondônia </option>
                                <option value="RR"> Roraima </option>
                                <option value="SC"> Santa Catarina </option>
                                <option value="SP"> São Paulo </option>
                                <option value="SE"> Sergipe </option>
                                <option value="TO"> Tocantins </option>
                                <option value="EX"> Estrangeiro </option>
                            </select>

                        </div>    
                        
                    </div>

                    <div class="col-12 text-right">
                        <button type="submit" name="save_cliente" class="botaoCadastroCliente">Cadastrar</button>
                    </div>
                    
                </div>               
                
            </form>
        </section>

    </main>
    

    
</body>
</html>