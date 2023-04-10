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
    <title>Login</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css" media="screen,projection" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/menu-hamburguer.css">
    <link rel="stylesheet" href="../../css/funcionario/style.css">

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
    // else if ($_SESSION['funcionario'] == true)
    //     header("Location: admin.php");
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
                    <li><a class="nav-item" href="saida_Carro.php">SAIDA DE CARRO</a></li>
                    <li><a class="nav-item" href="relatorio.php">RELATORIO</a></li>
                </ul>
            </nav>
        </label>
    </header>
    <main class="container" style="min-width: 300px; margin-top: 4%; margin-bottom: 4%;">
        <div class="row">
            <div class="align-self center black-text">
                <h2>Funcionarios Cadastrados</h2>
            </div>
        </div>
        <div class='row'>
            <div class="col s12 m6 l6 offset-l3">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6 offset-l3">
                <a class='white-text col s12 m6 l6 offset-l3' href="registrar_funcionario.php">
                    <button type='button' id='btn' class='btn waves-effect waves-light btn'>Cadastrar Funcionario</button>
                </a>
            </div>
        </div>
        <div class="row">
            <?php
            $query_consulta = "SELECT pk_usuarios, usuario, email, cargo FROM usuarios";
            $consulta = mysqli_query($con, $query_consulta);
            while ($infofuncionario = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="col s12 m6">
                    <div class="card-panel cinza" id="card">
                        <div class="card-content">
                            <span class="cinza-text">
                                <?php
                                echo "ID: " . $infofuncionario['pk_usuarios'] . "<br>";
                                echo "Nome: " . $infofuncionario['usuario'] . "<br>";
                                echo "Email: " . $infofuncionario['email'] . "<br>";
                                echo "Cargo: " . $infofuncionario['cargo'] . "<br>";
                                ?>
                            </span>
                        </div>
                        <div class="card-action">
                            <?php
                            echo "
                            <a class='white-text' href='edit_funcionario.php?id=" . $infofuncionario['pk_usuarios'] . "'>
                            <button type='button' id='btn' class='btn waves-effect waves-light btn'>Editar</button>
                            </a>
                             "
                            ?>
                            <?php
                            echo "
                            <a class='white-text' href='../../php/controller/controller_apagar_funcionario.php?id=" . $infofuncionario['pk_usuarios'] . "'>
                            <button type='button' id='btn' class='btn waves-effect waves-light btn'>Deletar</button>
                            </a>
                             "
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
    <footer class="">
        <img src="../../img/logo2.png" alt="">
    </footer>

    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/form-login.js"></script>

    <script>
        function redireciona(type) {
            if (type == 'edit') {
                window.location = `edit_funcionario.php?${$infofuncionario['pk_usuario']}`
            } else if (type == 'delete') {
                window.location = '../../php/controller/apagar_funcionario.php'
            }
        }
    </script>
</body>

</html>