<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../TGFATEC/css/bootstrap.min.css">
    <link rel="stylesheet" href="../TGFATEC/css/style.css"> 
    <title>Login - SGO</title>
    <link rel="shortcut icon" type="imagex/png" href="../TGFATEC/images/icon.volante.svg">
</head>

<body class="TelaLogin container-fluid row justify-content-center">

    <div class="row mt-5 pt-md-5 pt-lg-0">
    <img class="pt-4 pl-4" src="../TGFatec/images/icon.volante.svg" alt="imagem de um volande de carro simples"> 
    <p class="TICar pt-5 pl-4">TI Car</p>
    </div>

    
    <!-- formulário de login -->
    <main class="mt-5 col-12 col-sm-12 col-md-12 col-lg-12 row justify-content-center"> 

        <?php include ('message.php'); ?>

        <form action="Code_Login.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-7 row formLogin border border-white rounded justify-content-center">
            <h1 class="p-5">Login</h1>

            <label class="col-12" for="text">Usuário:</label>
            <input class="col-12 p-3 textBox" name="usuario" type="text" placeholder="Digite seu usuário:" autofocus="true"/>
            <label class="col-12 mt-5" for="password">Senha:</label>
            <input class="col-12 p-3 textBox" name="senha" type="password" placeholder="Digite sua senha:"/>
            <a class="col-12 p-3" href="">Esqueci minha senha</a>

            <button class="col-6 m-5 p-3 btn btn-primary" type="submit" name="login">Entrar</button>

        </form>

    </main>

    
</body>
</html>