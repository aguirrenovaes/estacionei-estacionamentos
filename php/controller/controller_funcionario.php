<?php
session_start();
include_once("../conexao.php");

if ($_SESSION['funcionario'] == true){
    $_SESSION['msg'] = "<p class='align-self center' style='color:red;'><b>Você Não Tem Permissão Suficiente</b></p>";
    header("Location: ../../pages/admin/lista_funcionario.php");
} else {
    
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
    
    $isValid = true;
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // checa se o email é válido
    
        $result_usuario = "SELECT * FROM usuarios WHERE email='$email'"; //string da consulta em SQL
        $resultado_usuario = mysqli_query($con, $result_usuario);
    
        while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
            if ($row_usuario['email'] == $email) {
                $isValid = false;
                break;
            }
        }
    
        if ($isValid) {
            $result_usuario = "INSERT INTO usuarios (usuario, email, senha, cargo) VALUES ('$usuario', '$email', '" . base64_encode($senha) . "', '$cargo')"; //string da consulta em SQL
            $resultado_usuario = mysqli_query($con, $result_usuario);
    
            if (mysqli_insert_id($con)) {
                // TODO: alterar o redirect e a mensagem se necessário
                $_SESSION['msg'] = "<p class='col s6 l6 offset-l3 verdinho-text' style='font-weight:400;  width:fit-content; margin:0.5rem auto;'>Usuário cadastrado com sucesso.</p>";
                header("Location: ../../pages/admin/lista_funcionario.php");
            } else {
                $_SESSION['msg'] = "<p class='col s6' style='font-weight:400; color:red; width:fit-content; margin:0.5rem auto;'>Usuário não foi cadastrado.</p>";
                header("Location: controller_funcionario.php");
            }
    
        } else {
            $_SESSION['msg'] = "<p class='col s6' style='font-weight:400; color:red; width:fit-content; margin:0.5rem auto;'>Erro: O email informado já foi cadastrado</p>";
            header("Location: controller_funcionario.php");
        }
    
    } else {
        $_SESSION['msg'] = "<p class='col s6' style='font-weight:400; color:red; width:fit-content; margin:0.5rem auto;'>Erro: Email no formato incorreto</p>";
        header("Location: controller_funcionario.php");
    }
}

?>