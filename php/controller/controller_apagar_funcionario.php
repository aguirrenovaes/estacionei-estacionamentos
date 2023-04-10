<?php
session_start();
include_once("../conexao.php");

if ($_SESSION['funcionario'] == true){
    $_SESSION['msg'] = "<p class='align-self center' style='color:red;'><b>Você Não Tem Permissão Suficiente</b></p>";
    header("Location: ../../pages/admin/lista_funcionario.php");
}else{

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    if(!empty($id)) {
        $query = "DELETE FROM usuarios WHERE pk_usuarios='$id'";
        $query = mysqli_query($con, $query);
        if(mysqli_affected_rows($con)) {
            $_SESSION['msg'] = "<p class='verdinho-text'>FUNCIONARIO DELETADO COM SUCESSO</p>";
            header("Location: ../../pages/admin/lista_funcionario.php");
        } else {
            $_SESSION['msg'] = "<p class='red-text'>ERRO! FUNCIOANRIO NÃO FOI DELETADO</p>";
            header("Location: ../../pages/admin/lista_funcionario.php");
        }
    } else{
        $_SESSION['msg'] = "<p class='red-text'>Selecione um usuário</p";
        header("Location: ../../pages/admin/lista_funcionario.php");
    }
}


?>