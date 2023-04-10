<?php 
    session_start();
    include_once('../conexao.php');

    $email = filter_input(INPUT_POST,'usu',FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    // $senha = base64_encode($senha);

    $query = "SELECT * FROM usuarios WHERE email='$email' AND senha='".base64_encode($senha)."'";
    $query_consulta = mysqli_query($con, $query);
    $consulta = mysqli_fetch_assoc($query_consulta);


    if (!empty($consulta)){
        // if ($email == $consulta['email'] && base64_encode($senha) == $consulta['senha']){
        $_SESSION['msg'] = "<p style='color:#70D44B;'><b>Conectado como: '". $consulta['usuario'] ."'</b></p>";
        $_SESSION['security'] = true;
        header("Location: ../../pages/admin/admin.php");
        
        //Conferir o cargo da pessoa e impor limites
        $query = "SELECT cargo FROM usuarios WHERE email='$email' AND senha='".base64_encode($senha)."'";
        $query_consulta = mysqli_query($con, $query);
        $result_query_array = mysqli_fetch_assoc($query_consulta);
        

        if($result_query_array['cargo'] == 'Funcionário'){
            $_SESSION['funcionario'] = true;
        }else{
            $_SESSION['funcionario'] = false;
        }
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Falha no login. Insira seus dados novamente </p>";
        header("Location: ../../pages/admin/login.php");
    }
?>