<?php
session_start();
include_once('conexao.php');


$query = "SELECT * FROM carros 
    INNER JOIN valor ON fk_valor = pk_valor
    
    ";



?>