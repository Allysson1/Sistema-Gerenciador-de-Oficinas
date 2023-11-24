<?php
session_start();
require '../utils/conexao.php';


        // comando para salvar cliente
if (isset($_POST['save_cliente'])){
         
    $nomecliente = mysqli_real_escape_string($con, $_POST['nomeCliente']);
    $cpfcliente = mysqli_real_escape_string($con, $_POST['cpfcliente']);
    $contato = mysqli_real_escape_string($con, $_POST['contato']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereço']);
    $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);


//     if ($nome == ""){ 
//         $_SESSION['message'] = "Nome do cliente não inserido!";
//         header("location: ../views/V_cadastraUsuario.php");
//         exit(0);
//     }
//     elseif ($usuario == ""){
//         $_SESSION['message'] = "Usuário do funcionário não inserido!";
//         header("location: ../views/V_cadastraUsuario.php");
//         exit(0);
//     }
//     elseif ($senha == ""){
//         $_SESSION['message'] = "Senha do funcionário não inserida!";
//         header("location: ../views/V_cadastraUsuario.php");
//         exit(0);
//     }
//     elseif (strlen($senha) < 8){ 
//         $_SESSION['message'] = "A senha deve possuir no minimo 8 digitos";
//         header("location: ../views/V_cadastraUsuario.php");
//         exit(0);
//     }

//     elseif ($email == ""){
//         $_SESSION['message'] = "email do funcionário não inserido!";
//         header("location: ../views/V_cadastraUsuario.php");
//         exit(0);
//     }
//     elseif ($nivelFuncionario == ""){
//         $_SESSION['message'] = "Nivel de acesso do funcionário não inserido!";
//         header("location: ../views/V_cadastraUsuario.php");
//         exit(0);
//     }

//     else{
//         $query = "INSERT INTO usuario (Nome, Usuario, Senha, Email, nivelFuncionario) 
//                 VALUES ('$nome', '$usuario', md5('$senha'), '$email', '$nivelFuncionario')";
    
//         $query_run = $con->query($query) or die ("Falha na conexao");

//         if ($query_run){

//             $_SESSION['message'] = "Funcionario cadastrado com sucesso!";
//             header("location: ../views/V_cadastraUsuario.php");
//             exit(0);
//         }
//         else {
//             $_SESSION['message'] = "Funcionário não cadastrado";
//             header("location: ../views/V_cadastraUsuario.php");
//             exit(0);
//         }

//     }
    
// }


// if (isset($_POST['delete_funcionario'])){

//     $funcionario_id = mysqli_real_escape_string($con, $_POST['delete_funcionario']);

//     $query = "UPDATE usuario SET status = 'D' WHERE idUsuario = '$funcionario_id'";
//     $query_run = mysqli_query($con, $query);

//     if ($query_run){
//         $_SESSION['message'] = "funcionário excluído com sucesso.";
//         header("location: ../views/V_VisualizaUsuarios.php");
//         exit(0);
//     }
//     else{
//         $_SESSION['message'] = "Não foi possivel excluir o funcionário";
//         header("location: ../views/V_VisualizaUsuarios.php");
//         exit(0);
//     }
// }


// if (isset($_POST['update_funcionario'])){

//     $funcionario_id = mysqli_real_escape_string($con, $_POST['funcionario_id']);
//     $nome = mysqli_real_escape_string($con, $_POST['nomeFuncionario']);
//     $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
//     $senha = mysqli_real_escape_string($con, $_POST['senha']);
//     $Confsenha = mysqli_real_escape_string($con, $_POST['confSenha']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $nivelFuncionario = mysqli_real_escape_string($con, $_POST['nivelFuncionario']);

//     //debug
//     // var_dump( $nivelFuncionario);
//     // var_dump($nome);
//     // var_dump($usuario);
//     // var_dump($senha);
//     // var_dump($Confsenha);
//     // var_dump($email);
//     // var_dump($funcionario_id);

//     if ($senha == ""){
//         $_SESSION['message'] = "Senha do funcionário não inserida!";
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0);
//     }

//     elseif ($Confsenha == ""){
//         $_SESSION['message'] = "Confirmação de Senha do funcionário não inserida!";
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0);
//     }
//     elseif (strlen($senha) < 8){ 
//         $_SESSION['message'] = "A senha deve possuir no minimo 8 digitos";
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0);
//     }

//     elseif ($Confsenha !== $senha){
//         $_SESSION['message'] = 'A senha nova senha e a senha redigitada são diferentes';
//         header("location: ../views/V_VisualizaUsuarios.php?idUsuario=$funcionario_id");
//         exit(0); 
//     }

//     else{

//         $query = "UPDATE usuario SET Nome='$nome', Usuario = '$usuario', Senha = md5('$senha'), email = ('$email'), nivelFuncionario = ('$nivelFuncionario')
//         WHERE idUsuario = '$funcionario_id' ";
//         $query_run = mysqli_query($con, $query);

//         if($query_run){
//             $_SESSION['message'] = 'Funcionário atualizado com sucesso';
//             header("location: ../views/V_VisualizaUsuarios.php");
//             exit(0);
//         }
//         else{
//             $_SESSION['message'] = "Não foi possivel atualizar o funcionário";
//             header("location: ../views/V_VisualizaUsuarios.php");
//             exit(0);
//         }

//     }
    
}
   
    


?>