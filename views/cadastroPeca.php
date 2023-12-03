<?php
    include('../utils/protect.php');
    require ('../utils/conexao.php');
   
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 3;

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

        <?php include ('../utils/message.php'); ?>
            

            <form enctype="multipart/form-data" action="../models/Code_Peca.php" method="POST" >
                <div class="row">
                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                        <!-- <div class="col-6">
                            <label for="codpeca">Código Peça:</label>
                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                        </div>                            -->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="nomepeça">Nome da Peça:</label>
                            <input type="text" name="NomePeca" class="form-control p-2 campoPeca">
                        </div>         

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="marca">Marca:</label>
                            <input type="text" name="MarcaPeca" class="form-control p-2 campoPeca   ">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
   
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="quantidade">Quantidade:</label>
                            <input type="text" name="QtdPeca" class="form-control p-2 campoPeca ">
                        </div>       
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="cnpjfornecedor">CNPJ do Fornecedor:</label>
                            <select name="CnpjFornecedor" class="SelectServicoCadasServico">
                            <option value="#" selected disabled>Selecione um fornecedor...</option>
                                <?php 
                                    $query = "SELECT CnpjFornecedor, NomeFornecedor FROM fornecedores WHERE StatusFornecedor != 'D' ORDER BY NomeFornecedor ASC ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0){

                                        foreach($query_run as $fornecedores){

                                            ?>
                                            <option value="<?= $fornecedores['CnpjFornecedor']?>";><?= $fornecedores['NomeFornecedor'] . " - " . $fornecedores['CnpjFornecedor']?></option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>           
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="datapedido">Data de Pedido:</label>
                            <input type="date" name="DataPedido" class="form-control p-2 campoPeca  ">
                        </div>  
                        
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="datarecebimento">Data Recebimento:</label>
                            <input type="date" name="DataRecebimento" class="form-control p-2 campoPeca ">
                        </div>
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 30px;">

                        <div class="col-6 left">
                            <label for="fotopeca">Adicione imagens da peça:</label>
                            <div class="input-group">
                                
                                <input type="file" name="ImagemPeca" id="imgPeca" class="form-control p-2" style = "border: none;" accept="image/*">
                                <button id="ResetPeca" class="btn btn-outline-secondary excluirFoto, border-0" type ="reset" onclick="this.parentNode.removeChild(imagem)">X</button>
                                
                            </div>
                        </div>   
               
                    </div>

                    <div class="col-12" style="display: flex; margin-bottom: 20px;">
                        <div class="col-12">
                            <label for="username">Especificações técnicas:</label>
                            <textarea class="campodescricaopeca" name="DescricaoPeca" rows="6" cols="50"></textarea>
                        </div>                  
                    </div>  

                    <div class="col-12  text-right">
                        <button class="botaoCadastroServico" type="submit" name="SavePeca">Cadastrar</button>
                    </div>
                    
                </div>               
                
            </form>
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