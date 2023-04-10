<?php
session_start();
include_once('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

//Sessão de Coleta das Variáveis
$date=date('h:i:s');
$date = filter_input(INPUT_POST,'entrada');
$vaga = filter_input(INPUT_POST,'vaga');
$placa = filter_input(INPUT_POST,'placa',FILTER_SANITIZE_STRING);

//Sessão de prevenção de cópias
$query = "SELECT COUNT(*) AS isParked FROM carros INNER JOIN vagas ON vagas.pk_vagas = carros.fk_vagas WHERE placa='$placa' AND ocupado=1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$isParked = $row['isParked'];

if ($isParked) {
    $_SESSION['msg'] = "<p style='color:red;'>Erro: A placa já possui cadastro ativo.</p><br>";
    header("Location: ../../pages/admin/registrar_carro.php"); 
}
else {
    //Sessão de Validação de Placa e Finalização
    $pattern = '/^[A-Z]{3}[0-9]{1}[A-Z0-9]{1}[0-9]{2}$/';

    if (preg_match_all($pattern,$placa)){
        $_SESSION['msg'] = "<p style='color:#70D44B;'>Placa Válida</p>";

        $query = "INSERT INTO precos VALUES (DEFAULT, NULL)";
        $result = mysqli_query($con, $query);

        $query = "SELECT pk_preco FROM precos ORDER BY pk_preco DESC ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        $preco_id = $row['pk_preco'];

        $query = "INSERT INTO carros  VALUES (DEFAULT, '$placa', '$date', DEFAULT, '$vaga', '$preco_id')";
        $query_insere = mysqli_query($con,$query);

        $queryatt = "UPDATE vagas SET ocupado = '1' WHERE pk_vagas = '$vaga'";
        $query_att = mysqli_query($con,$queryatt);
        

        $_SESSION['msg'] = "<p style='color:green;'>Vaga Preenchida com Sucesso</p><br>";
            header("Location: ../../pages/admin/registrar_carro.php"); 


        

    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Placa Inválida</p><br>";
        header("Location: ../../pages/admin/registrar_carro.php"); 
    }
}