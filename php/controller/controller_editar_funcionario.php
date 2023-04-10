<?php
session_start();
include_once('../conexao.php');

if ($_SESSION['funcionario'] == true){
    $_SESSION['msg'] = "<p class='align-self center' style='color:red;'><b>Você Não Tem Permissão Suficiente</b></p>";
    header("Location: ../../pages/admin/lista_funcionario.php");
} else {

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
    
    $query = "UPDATE usuarios SET usuario='$usuario',email='$email', senha = '" . base64_encode($senha) . "', cargo='$cargo' WHERE pk_usuarios='$id'";
    
    $query = mysqli_query($con, $query);
    
    if(mysqli_affected_rows($con)){
        $_SESSION['msg'] = '<p class="verdinho-text">FUNCIONARIO EDITADO COM SUCESSO</p>';
        header('Location: ../../pages/admin/lista_funcionario.php');
    } else {
        $_SESSION['msg'] = '<p>USUARIO NÃO EDITADO</p>';
        header('Location: ../../pages/admin/lista_funcionario.php');
    }
}

?>