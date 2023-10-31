<?php
    // variável com o nivel exigido do usuario para acessar a página
    $nivel_necessario = 3;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <title>Consultar Peças</title>
        <link rel="shortcut icon" type="imagex/png" href="../images/icon.volante.svg">
    </head>

    <body>

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
                            <button class="botaoPesquisaHome">Pesquisar</button>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin: 0px">
                    <div class="col-sm-4">
                        <div class="cardHome">

                            <div class="todosItensCard">
                                <div class="text-center">
                                    <img
                                        src="../images/biela.png"
                                        class="img-fluid rounded mx-auto d-block pb-3"
                                        alt="...">
                                </div>

                                <div class="pl-2 itemCard">
                                    <span>Nome:</span>
                                    <span id="">Biela</span>
                                </div>
                                <div class="pl-2 itemCard">
                                    <span>Quantidade:</span>
                                    <span id="">42 - Em estoque</span>
                                </div>
                                <div class="pl-2 itemCard">
                                    <span>Marca:</span>
                                    <span id="">GM - Genuino</span>
                                </div>
                                <div class="pl-2 itemCard">
                                    <span>Código:</span>
                                    <span id="">1452</span>
                                </div>

                                <div
                                    class="d-flex justify-content-sm-around justify-content-md-around justify-content-lg-around">
                                    <button type="button" class="btn btn-light btn-lg ">Ver mais</button>

                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
                                     Alterar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cardHome">

                            <div class="todosItensCard">
                                <div class="text-center">
                                    <img
                                        src="../images/biela.png"
                                        class="img-fluid rounded mx-auto d-block"
                                        alt="...">
                                </div>

                                <div class="p-1 itemCard">
                                    <span>Nome:</span>
                                    <span id="">Biela</span>
                                </div>
                                <div class="p-1 itemCard">
                                    <span>Quantidade:</span>
                                    <span id="">42 - Em estoque</span>
                                </div>
                                <div class="p-1 itemCard">
                                    <span>Marca:</span>
                                    <span id="">GM - Genuino</span>
                                </div>
                                <div class="p-1 itemCard">
                                    <span>Código:</span>
                                    <span id="">1452</span>
                                </div>

                                <div
                                    class="d-flex justify-content-sm-around justify-content-md-around justify-content-lg-around">
                                    <button type="button" class="btn btn-light btn-lg ">Ver mais</button>

                                    <button type="button" class="btn btn-primary btn-lg ">Alterar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cardHome">

                            <div class="todosItensCard">
                                <div class="text-center">
                                    <img
                                        src="../images/biela.png"
                                        class="img-fluid rounded mx-auto d-block"
                                        alt="...">
                                </div>

                                <div class="p-2 itemCard">
                                    <span>Nome:</span>
                                    <span id="">Biela</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Quantidade:</span>
                                    <span id="">42 - Em estoque</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Marca:</span>
                                    <span id="">GM - Genuino</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Código:</span>
                                    <span id="">1452</span>
                                </div>

                                <div
                                    class="d-flex justify-content-sm-around justify-content-md-around justify-content-lg-around">
                                    <button type="button" class="btn btn-light btn-lg ">Ver mais</button>

                                    <button type="button" class="btn btn-primary btn-lg ">Alterar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 0px">
                    <div class="col-sm-4">
                        <div class="cardHome">

                            <div class="todosItensCard">
                                <div class="text-center">
                                    <img
                                        src="../images/biela.png"
                                        class="img-fluid rounded mx-auto d-block"
                                        alt="...">
                                </div>

                                <div class="p-2 itemCard">
                                    <span>Nome:</span>
                                    <span id="">Biela</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Quantidade:</span>
                                    <span id="">42 - Em estoque</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Marca:</span>
                                    <span id="">GM - Genuino</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Código:</span>
                                    <span id="">1452</span>
                                </div>

                                <div
                                    class="d-flex justify-content-sm-around justify-content-md-around justify-content-lg-around">
                                    <button type="button" class="btn btn-light btn-lg ">Ver mais</button>

                                    <button type="button" class="btn btn-primary btn-lg ">Alterar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cardHome">

                            <div class="todosItensCard">
                                <div class="text-center">
                                    <img
                                        src="../images/biela.png"
                                        class="img-fluid rounded mx-auto d-block"
                                        alt="...">
                                </div>

                                <div class="p-2 itemCard">
                                    <span>Nome:</span>
                                    <span id="">Biela</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Quantidade:</span>
                                    <span id="">42 - Em estoque</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Marca:</span>
                                    <span id="">GM - Genuino</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Código:</span>
                                    <span id="">1452</span>
                                </div>

                                <div
                                    class="d-flex justify-content-sm-around justify-content-md-around justify-content-lg-around">
                                    <button type="button" class="btn btn-light btn-lg ">Ver mais</button>

                                    <button type="button" class="btn btn-primary btn-lg ">Alterar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cardHome">

                            <div class="todosItensCard">
                                <div class="text-center">
                                    <img
                                        src="../images/biela.png"
                                        class="img-fluid rounded mx-auto d-block"
                                        alt="...">
                                </div>

                                <div class="p-2 itemCard">
                                    <span>Nome:</span>
                                    <span id="">Biela</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Quantidade:</span>
                                    <span id="">42 - Em estoque</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Marca:</span>
                                    <span id="">GM - Genuino</span>
                                </div>
                                <div class="p-2 itemCard">
                                    <span>Código:</span>
                                    <span id="">1452</span>
                                </div>

                                <div
                                    class="d-flex justify-content-sm-around justify-content-md-around justify-content-lg-around">
                                    <button type="button" class="btn btn-light btn-lg">Ver mais</button>

                                    <button type="button" class="btn btn-primary btn-lg">Alterar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary btn-lg p-3   ">Ver mais peças...</button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="ModalAlterarLabel">Alterar dados da peça</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                
                        <section class="section-content">  
                                <form>

                                <div class="row">
                                    <div class="col-12" style="display: flex; margin-bottom: 30px; margin-top: 45px">
                                        <div class="col-6">
                                            <label for="username">Código da Peça:</label>
                                            <input type="text" name="username" class="form-control p-2 p-2 campoDigitar">
                                        </div>
                                        <div class="col-6">
                                            <label for="username">Nome da Peça:</label>
                                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                                        </div>
                                         
                                    </div>

                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                        <div class="col-6">
                                            <label for="username">Marca:</label>
                                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                                        </div>
                                        <div class="col-6">
                                            <label for="username">Quantidade:</label>
                                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                                        </div>                   
                                    </div>
                    
                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                        <div class="col-6">
                                            <label for="username">CNPJ do Fornecedor:</label>
                                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                                        </div>

                                        <div class="col-6">
                                            <label for="username">Nome do Fornecedor:</label>
                                            <input type="text" name="username" class="form-control p-2 campoDigitar">
                                        </div>
                                    </div>

                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                        <div class="col-6">
                                            <label for="username">Contato do Fornecedor:</label>
                                            <input type="text" name="username" class="form-control p-2 campoDigitar" required placeholder="(xx) xxxxx-xxxx">
                                        </div>

                                        <div class="col-6">
                                            <label for="username">Data do Pedido:</label>
                                            <input type="date" name="username" class="form-control p-2 campoDigitar">
                                        </div>
                                    </div>
                    
                                    <div class="col-12" style="display: flex; margin-bottom: 30px;">
                                        <div class="col-6">
                                            <label for="username">Data do Recebicemento:</label>
                                            <input type="date" name="username" class="form-control p-2 campoDigitar">
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
                                                <label for="username">Descrição:</label>
                                                <textarea class="p-2 campoObservacoes" name="observacoes" rows="6" cols="50"></textarea>
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

                        </div>
                        </div>
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