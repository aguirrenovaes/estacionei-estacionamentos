<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css" media="screen,projection" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/menu-hamburguer.css">
    <link rel="stylesheet" href="../../css/registrar/style.css">
    <link rel="stylesheet" href="../../css/registrar/form-registrar.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fonte Google-Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- FavIcon -->
    <!-- <link rel="icon" type="image/x-icon" href="/img/estacionei.svg"> -->
    <title>Estacionei - Cadastrar Empregado</title>
</head>

<body>
    <?php 
    if ($_SESSION['security'] == false){
        header("Location: login.php");
    }else if ($_SESSION['funcionario'] == true){
        $_SESSION['msg'] = "<p style='color:red;'><b>Você Não Tem Permissão Suficiente</b></p>";
        header("Location: lista_funcionario.php");
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
                <div class="col s12 m8 offset-m2 z-depth-5 cor-box">
                    <form class="col m12 s12 xl12 l12" action="../../php/controller/controller_funcionario.php" method="POST">
                        <br>
                        <h5 style="color: #70D44B;" class="center-align flow-text">Cadastrar Funcionário</h5>
                        <i class="small material-icons">person_add</i>
                        <br>
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <div class="row">
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <label for="usu" style="color: #70D44B;">Usuário</label>
                                <input placeholder="Insira seu Usuário" name="usuario" id="usu" type="text" class="validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <label for="usu" style="color: #70D44B;">Email</label>
                                <input placeholder="Insira seu Email" name="email" id="usu" type="email" class="validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <label for="senha" style="color: #70D44B">Senha</label>
                                <input placeholder="Insira sua Senha" name="senha" id="senha" minlength="8" type="password" class="validate">
                                <button id="eye" type="button" onclick="mostraSenha()" class="material-icons black-text">remove_red_eye</button>
                            </div>
                        </div>

                        <div class="row">
                            <p class="green1-text">Cargo</p>
                            <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                <div class="col s6" style="text-align: start;">
                                    <label>
                                        <input class="with-gap" name="cargo" type="radio" value="Admin" checked />
                                        <span class="white-text">Admin</span>
                                    </label>
                                </div>
                                <p class="col s6">
                                    <label>
                                        <input class="with-gap" name="cargo" type="radio" value="Funcionário" />
                                        <span class="white-text">Funcionário</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 m6 offset-s3 offset-m3">
                                <button id="login" class="btn waves-effect waves-light btn-large" type="submit" name="action">Cadastrar
                                    <!-- <i class="material-icons right">send</i> -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!-- fim col s12-->
            </div> <!-- fim row 1 -->
        </div> <!-- fim container -->
    </main>

    <!-- <form method="POST" action="proc_cad_usuario.php">
        <label for="">Usuário: </label>
        <input type="text" name="usuario" placeholder="usuário" autofocus > <br> <br>
        
        <label for="">CPF: </label>
        <input type="text" name="cpf" placeholder="CPF" autofocus required> <br> <br>

        <label for="">Senha: </label>
        <input type="password" name="senha" placeholder="Senha"> <br><br>


        <label for="">Cargo: </label> <br>
        <label for="">Admin: </label>
        <input type="radio" name="cargo" value="Admin"> <br>        
        <label for="">Funcionário: </label>
        <input type="radio" name="cargo" value="Funcionário"> <br>

        <input type="submit" value="Salvar">
    </form> -->


    <footer>
        <img class="col s4" src="../../img/logo2.png" alt="">
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/register/form-register.js"></script>
</body>

</html>