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
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
    <!-- Link CSS -->
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/menu-hamburguer.css">
    <link rel="stylesheet" href="../../css/login/form-login.css">
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
    <header>
        <img src="../../img/logo.png" alt=""/>
        <div>
          <nav class="nav-content black">
              <ul class="black">
                  <li><a class="nav-item" href="../novidades.html">NOVIDADES</a></li>
                  <li><a class="nav-item" href="../../index.php#sobre-nos">SOBRE NÓS</a></li>
                  <li><a class="nav-item" href="../../index.php">HOME</a></li>
                  <li><a class="nav-item" href="../mapa.php">MAPA DE LOCALIZAÇÃO</a></li>
                  <li><a class="nav-item" href="../contato.php">CONTATO</a></li>
              </ul>
          </nav>
        </div>
        <button id="login" class="btn waves-effect waves-light btn">LOGIN</button>
        
        <input id="menu-hamburguer" type="checkbox">
        <label  for="menu-hamburguer">
          <img id="icon-menu" src="../../img/menu.png" alt="">
        </label>
        <label class="menu-hamburguer">
          <nav class="nav-content2 black">
            <ul class="black">
                <li><a class="nav-item" href="">NOVIDADES</a></li>
                <li><a class="nav-item" href="">SOBRE NÓS</a></li>
                <li><a class="nav-item" href="">HOME</a></li>
                <li><a class="nav-item" href="">MAPA DE LOCALIZAÇÃO</a></li>
                <li><a class="nav-item" href="">CONTATO</a></li>
            </ul>
        </nav>
        </label>
    </header>

    <main style="min-width: 300px; margin-top: 4%; margin-bottom: 4%;">
        <div class="cor-fundo">
            
            <div class="container" style="margin: 0 auto;">
                <div class="row">
                    <div class="col s12 m8 offset-m2 l8 offset-l2 xl6 offset-xl3 z-depth-5 cor-box">
                        
                            <!-- <h5 class="center-align">Login</h5> -->
                            <form class="col m12 s12 xl12 l12" action="../../php/controller/controller_login.php" method="POST">
                                <br>    
                                <h5 style="color: #70D44B;" class="center-align flow-text">Login</h5><br>
                                <?php 
                                    if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                ?>
                                <div class="row">
                                    <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                        <label for="usu" style="color: #70D44B;">Email</label>
                                        <input  id="usu" name="usu" type="email" class="validate" required>
                                    </div>
    
                                </div>
                                <div class="row">
                                    <div class="input-field col xl6 l6 m8 s12 offset-m2 offset-l3 offset-xl3">
                                        <label for="senha" style="color: #70D44B">Senha</label>
                                        <input  id="senha" name="senha" minlength="" type="password" class="validate" required>
                                        <button id="eye" type="button" onclick="mostraSenha()" class="material-icons white-text">remove_red_eye</button>
                                        <div style="display: flex;">

                                        </div>
                                        
                                    </div>
        
                                </div>
                                <div class="row">
                                    <div class="col s6 m6 offset-s3 offset-m3">
                                        <button id="login" class="btn waves-effect waves-light btn-large" type="submit" name="action">Login
                                            <!-- <i class="material-icons right">send</i> -->
                                        </button>
                                    </div>
                                </div>
                            </form>
                        
                    </div> <!-- fim col s12-->
                </div>   <!-- fim row 1 -->
            </div> <!-- fim container -->
        </div> <!-- fim cor-fundo -->
    
    </main>
    <footer class="">
        <img src="../../img/logo2.png" alt="">
    </footer>

    <script type="text/javascript" src="../../js/materialize.js"></script>
    <script src="../../js/login/login.js"></script>
</body>
</html>