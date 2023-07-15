<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../TGFATEC/css/bootstrap.min.css">
    <link rel="stylesheet" href="../TGFATEC/css/style.css"> 
    <title>Cadastro de Funcionários - SGO</title>
    <link rel="shortcut icon" type="imagex/png" href="../TGFATEC/images/icon.volante.svg">
</head>

<?php include 'header.php'; ?>

<body class="container-fluid row justify-content-center">



     <!-- formulário de login -->
     <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-10"> 

<h4 class="col-12 m-3 pb-4 border-bottom">Cadastro de Funcionários</h4>

<form action="usuario.php" method="post" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
   

    <div class=" col-12 col-md-6 float-md-left">
        <label class="col-12 col-md-12 mt-5 mt-md-5" 
    for="email">Nome do Funcionário:</label>
    <input class="col-12 col-md-12  mt-md-1 p-3 textBox" 
    type="text" placeholder="Digite seu nome completo:" autofocus="true"/>
    </div>
    
    <div class=" col-12 col-md-6 float-md-left">
        <label class="col-12 col-md-12  mt-5 mt-md-5" 
    for="password">Usuário:</label>
    <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
    type="text" placeholder="Digite seu nome de Usuário:"/>
    </div>


    <div class=" col-12 col-md-12 float-md-left">
        <label class="col-12 col-md-12 mt-5 mt-md-5" 
    for="password">Senha:</label>
    <input class="col-12 col-md-6 mt-md-1  p-3 textBox" 
    type="password" placeholder="Digite sua Senha:"/>
    </div>


    <div class="float-right col-5 col-md-3 mt-5 mt-md-5">
    <button class="col-12 ml-1 p-3 btn btn-primary" type="submit">Cadastrar</button>      
    </div>

</form>

</main>

    
</body>
</html>