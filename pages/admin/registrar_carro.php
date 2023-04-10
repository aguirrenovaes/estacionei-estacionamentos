<?php
session_start();
include_once('../../php/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionei - Registrar Carro</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css" media="screen,projection" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="../../css/admin/admin.css">
    <link rel="stylesheet" href="../../css/admin/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/menu-hamburguer.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fonte Google-Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- FavIcon -->
    <!-- <link rel="icon" type="image/x-icon" href="/img/estacionei.svg"> -->

</head>

<body>
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
    <main style="min-width: 300px; margin-top: 4%; margin-bottom: 4%;">
        <div class="container" style="margin: 0 auto;">
            <div class="row">
                <div class="col s12 m8 offset-m2 l8 offset-l2 xl6 offset-xl3 z-depth-5 form-box">
                    <form class="col m12 s12 xl12 l12" action="../../php/controller/controller_carro.php" method="POST">
                        <br>
                        <h5 style="color: #70D44B;" class="center-align flow-text">Cadastrar Carro</h5><br>
                        <?php 
                            if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            }
                        ?>
                        <div class="row">
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <label for="placa" style="color: #70D44B;">Placa do Carro</label>
                                <input name="placa" type="text" maxlength="7" id="placa" class="validate" autofocus required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <p style="color: #70D44B">Horario de entrada:</p>
                                <input name="entrada" id="entrada" type="datetime-local">

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <p style="color: #70D44B;" class="active">Escolha uma vaga disponivel:</=>
                                    <select class="browser-default" name="vaga" id="vagas">
                                        <option selected>Selecione</option>
                                        <?php

                                        $vagas = "SELECT numero_vaga FROM vagas WHERE ocupado = 0";
                                        $vagas = mysqli_query($con, $vagas);

                                        while ($row_vagas = mysqli_fetch_assoc($vagas)) {
                                        ?><option value="<?php echo $row_vagas['numero_vaga'] ?>"><?php echo $row_vagas['numero_vaga'] ?></option> <?php
                                                                                                                                                }
                                                                                                                                                    ?>
                                    </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 m6 l6 xl6 offset-s3 offset-m3 offset-l3 offset-xl3">
                                <button id="btn" class="btn waves-effect waves-light btn-large" type="submit" name="action">
                                    Registrar Carro
                                </button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="">
        <img src="../../img/logo2.png" alt="">
    </footer>

    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/login/login.js"></script>
</body>

</html>