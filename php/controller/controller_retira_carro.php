<?php
session_start();
include_once("../conexao.php");
date_default_timezone_set('America/Sao_Paulo');

// id ou placa do carro para selecionar no banco
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)) {
    // pega os dados do carro que está saindo
    $query = "SELECT * FROM carros WHERE pk_carros='$id'";
    $query = mysqli_query($con, $query);
    $row_consulta = mysqli_fetch_assoc($query);
    
    $vaga_do_carro = $row_consulta['fk_vagas'];
    
    // coloca o horário de saída do carro no banco
    $query2 = "UPDATE carros SET saida=NOW() WHERE pk_carros='$id'";
    mysqli_query($con, $query2);
    
    // coloca o status de vazio na vaga
    $query3 = "UPDATE vagas AS VAGS INNER JOIN carros AS CARS ON CARS.fk_vagas = VAGS.pk_vagas SET ocupado=0 WHERE pk_vagas='$vaga_do_carro'";
    mysqli_query($con, $query3);
    
    
    ////////////////// CALCULO DO VALOR A SER PAGO 
    
    $query_cliente = "SELECT * FROM carros WHERE pk_carros = '$id'";
    $resultado_consulta = mysqli_query($con, $query_cliente);
    $row_consulta = mysqli_fetch_assoc($resultado_consulta);
    
    $from_time = strtotime($row_consulta['entrada']);
    $to_time = strtotime($row_consulta['saida']);
    $tempo_no_estacionamento = round(abs($from_time - $to_time) / 60, 2); // tempo em minutos

    
    
    $multa_hora_adicional = 9.00;
    
    if ($tempo_no_estacionamento <= 15)
        $total_pagar = 0;
    elseif ($tempo_no_estacionamento > 15 && $tempo_no_estacionamento <= 60)
        $total_pagar = 27.00;
    elseif ($tempo_no_estacionamento > 60 && $tempo_no_estacionamento <= 120)
        $total_pagar = 32.00;
    else
        $total_pagar = 32.00 + ($multa_hora_adicional * ceil(($tempo_no_estacionamento - 120) / 60));
    
    echo "<br>Total a pagar = R$" . $total_pagar;


    $query = "UPDATE precos,carros SET preco = '$total_pagar' WHERE pk_preco = fk_preco AND pk_carros='$id'";
    $query = mysqli_query($con, $query);


    $tempo_no_estacionamento = 0;


    header('Location: ../../pages/admin/admin.php');
}


?>

