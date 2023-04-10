<?php
session_start();
include_once('../../php/conexao.php');
date_default_timezone_set('America/Sao_Paulo');
$date = getdate();

$month = $date['mon'];


$soma = 0;
$query = "SELECT * FROM carros
            INNER JOIN precos ON fk_preco = pk_preco
            INNER JOIN vagas ON fk_vagas = pk_vagas
        WHERE entrada LIKE '%$month%' AND
        saida LIKE '%$month%' AND
        saida IS NOT NULL
    
";

$query = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionei - Admin</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css" media="screen,projection" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/menu-hamburguer.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <!-- <link rel="stylesheet" href="../../css/relatorio/style.css"> -->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fonte Google-Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- FavIcon -->
    <!-- <link rel="icon" type="image/x-icon" href="/img/estacionei.svg"> -->
</head>

<body style="font-family: 'Roboto', sans-serif; color: white;">
    <?php 
    if ($_SESSION['security'] == false){
        header("Location: login.php");
    }
    ?>
    <header>
        <img src="../../img/logo.png" alt="" />
        <div>
            <nav class="nav-content black">
                <ul class="black">
                    <li><a class="nav-item" href="vagas.php">VAGAS</a></li>
                    <li><a class="nav-item" href="lista_funcionario.php">FUNCIONARIOS</a></li>
                    <li><a class="nav-item" href="admin.php">CARROS</a></li>
                    <li><a class="nav-item" href="registrar_carro.php">CADASTRAR CARRO</a></li>
                    <li><a class="nav-item" href="relatorio.php">RELATORIO</a></li>

                </ul>
            </nav>
        </div>
        <a id="login" class="btn waves-effect waves-light btn" type="button" href="../../php/controller/controller_logoff.php">LOGOFF</a>

        <input id="menu-hamburguer" type="checkbox">
        <label for="menu-hamburguer">
            <img id="icon-menu" src="../../img/menu.png" alt="">
        </label>
        <label class="menu-hamburguer">
            <nav class="nav-content2 black">
                <ul class="black">
                    <li><a class="nav-item" href="vagas.php">VAGAS</a></li>
                    <li><a class="nav-item" href="lista_funcionario.php">FUNCIONARIOS</a></li>
                    <li><a class="nav-item" href="admin.php">CARROS</a></li>
                    <li><a class="nav-item" href="registrar_carro.php">CADASTRAR CARRO</a></li>

                    <li><a class="nav-item" href="relatorio.php">RELATORIO</a></li>
                </ul>
            </nav>
        </label>
    </header>

    <main class="container">

        <div class="row">
            <br>
            <h2 class="align-self center black-text">Relatorio Mensal</h2>
            <br>

            <?php
            while($infocarro = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col s12 m6 l6">
                    <div class="card-panel cinza">
                        <span>
                            <?php
                            echo "<p class='verdinho-text'>Placa:  <b class='cinza-text'>" .  $infocarro['placa'] . "</b></p><br>";
                            echo "<p class='verdinho-text'>Entrada:  <b class='cinza-text'>" . $infocarro['entrada'] . "</b></p><br>";
                            echo "<p class='verdinho-text'>Saida:  <b class='cinza-text'>" . $infocarro['saida'] . "</b></p><br>";
                            echo "<p class='verdinho-text'>Vaga:  <b class='cinza-text'>" . $infocarro['numero_vaga'] . "</b></p><br>";
                            echo "<p class='verdinho-text'>Preço:  <b class='cinza-text'>" . $infocarro['preco'] . "</b></p><br>";
                            $soma = $soma + floatval($infocarro['preco']) ;
                            ?>
                        </span>
                    </div>
                </div>
            <?php
            }        
            ?>
        </div>
        <h4 class=" align-self center black-text">Total R$<?php echo $soma;?></h3>
    </main>

    <footer style="position: absolute;" class="">
        <img src="../../img/logo2.png" alt="">
    </footer>

    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/form-login.js"></script>

</body>

</html>