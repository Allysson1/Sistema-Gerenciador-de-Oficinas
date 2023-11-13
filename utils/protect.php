<?php

    if(!isset($_SESSION)){
        session_start();
    }


    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
 
        //A última solicitação foi há mais de 10 minutos
        session_unset();     //Variável para o tempo de execução 
        session_destroy();   //Destruir os dados da sessão no armazenamento
    }
     
    //Atualizar o registro de data e hora da última atividade
    $_SESSION['LAST_ACTIVITY'] = time(); 


    if(!isset($_SESSION['idUsuario'])){
        header("location: ../views/index.php");
        $_SESSION['message'] = "Sua Sessão expirou, faça login novamente.";
        header("location: ../views/index.php");
        exit;
    }




?>