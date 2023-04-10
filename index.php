<!DOCTYPE html>
<html lang="pt-br">
<head>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estacionei Estacionamento</title>
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="css/materialize.css"
      media="screen,projection"
    />
    <!-- Import CSS Style -->
    <link rel="stylesheet" href="css/menu-hamburguer.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/home/slider.css" />
    <link rel="stylesheet" href="css/home/sobre-nos.css" />
    <link rel="stylesheet" href="css/home/servicos.css" />
    <link rel="stylesheet" href="css/home/avaliacoes.css" />
    <link rel="stylesheet" href="css/home/divisor.css" />
    <!-- Fonte Google-Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <!-- FavIcon -->
    <!-- <link rel="icon" type="image/x-icon" href="/img/estacionei.svg"> -->
  </head>
<body>
    <header class="">
      <img class="" src="img/logo.png" alt="" />
      <div class="black">
        <nav class="nav-content black">
          <ul class="">
            <li><a class="nav-item" href="pages/novidades.html">NOVIDADES</a></li>
            <li><a class="nav-item" href="#sobre-nos">SOBRE NÓS</a></li>
            <li><a class="nav-item nav-item-current" href="">HOME</a></li>
            <li><a class="nav-item" href="pages/mapa.php">MAPA DE LOCALIZAÇÃO</a></li>
            <li><a class="nav-item" href="pages/contato.php">CONTATO</a></li>
          </ul>
        </nav>
      </div>
      <input id="menu-hamburguer" type="checkbox" />
      <label for="menu-hamburguer">
        <img id="icon-menu" src="img/menu.png" alt="" />
      </label>
      <label class="menu-hamburguer">
        <nav class="nav-content2 black">
          <ul class="black">
            <li><a class="nav-item" href="pages/novidades.html">NOVIDADES</a></li>
            <li><a class="nav-item" href="#sobre-nos">SOBRE NÓS</a></li>
            <li><a class="nav-item nav-item-current" href="">HOME</a></li>
            <li><a class="nav-item" href="pages/mapa.php">MAPA DE LOCALIZAÇÃO</a></li>
            <li><a class="nav-item" href="pages/contato.php">CONTATO</a></li>
          </ul>
        </nav>
      </label>
    </header>
    <main>
        <section id="slider"></section>   
        <div class="divisor"></div>
        <section id="servicos" class="container">
          <h2>SERVIÇOS</h2>
          <hr class="underline">
          <div class="row">
            <div class="col l4 m7">
              <div class="card">
                <div class="card-image">
                  <img src="img/home/estacionei.png">
                  <!-- <span class="card-title">Estacionamento por hora</span> -->
                </div>
                <div class="card-content ">
                  <p class="black-text">Estacionamento por hora.</p>
                </div>
                <div class="card-action cinza">
                  <a href="#" class="cinza-text" id="text-card-action">Ver serviço</a>
                </div>
              </div>
            </div>
            <div class="col l4 m7">
              <div class="card">
                <div class="card-image">
                  <img src="img/home/estacionei2.webp">
                  <!-- <span class="card-title">Estacionamento mensal</span> -->
                </div>
                <div class="card-content ">
                  <p class="black-text">Estacionamento mensal.</p>
                </div>
                <div class="card-action cinza">
                  <a href="#" id="text-card-action">Ver serviço</a>
                </div>
              </div>
            </div>
            <div class="col l4 m7">
              <div class="card">
                <div class="card-image">
                  <img src="img/home/estacionei5.webp">
                  <!-- <span class="card-title">Estacionamento valet</span> -->
                </div>
                <div class="card-content ">
                  <p class="black-text">Estacionamento valet.</p>
                </div>
                <div class="card-action cinza">
                  <a href="#"  id="text-card-action">Ver serviço</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col l4 m7">
              <div class="card">
                <div class="card-image">
                  <img src="img/home/estacionei6.jpg">
                  <!-- <span class="card-title">Serviços de lavagem de carro</span> -->
                </div>
                <div class="card-content ">
                  <p class="black-text">Serviços de lavagem de carro.</p>
                </div>
                <div class="card-action cinza">
                  <a href="#"  id="text-card-action">Ver serviço</a>
                </div>
              </div>
            </div>
            <div class="col l4 m7">
              <div class="card">
                <div class="card-image">
                  <img src="img/home/estacionei3.jpg">
                  <!-- <span class="card-title">Serviços de manutenção</span> -->
                </div>
                <div class="card-content ">
                  <p class="black-text">Serviços de manutenção.</p>
                </div>
                <div class="card-action cinza">
                  <a href="#"  id="text-card-action">Ver serviço</a>
                </div>
              </div>
            </div>
            <div class="col l4 m7">
              <div class="card">
                <div class="card-image">
                  <img src="img/home/estacionei7.jpg">
                  <!-- <span class="card-title">Vigilância e segurança</span> -->
                </div>
                <div class="card-content">
                  <p class="black-text">Vigilância e segurança.</p>
                </div>
                <div class="card-action cinza">
                  <a href="#"  id="text-card-action">Ver serviço</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div id="divisor"></div>
        <section id="sobre-nos">
          <h2>SOBRE NÓS</h2>
          <hr class="underline">
          <div id="sobre-nos-text">
            <div class="row">
              <div class="col s12 m8 offset-m2 l8 offset-l2 xl6 offset-xl3 z-depth-5 cinza">
                <p class="cinza-text">Bem-vindo ao <b class="verdinho-text">Estacionei Estacionamento</b>, a empresa líder em serviços de estacionamento para clientes em todo o país. 
                  Fundada em 2005, nossa empresa tem se dedicado a fornecer soluções de estacionamento acessíveis e convenientes para 
                  clientes em todos os setores.
                </p> <br>
                <p class="cinza-text">
                  Aqui no <b class="verdinho-text">Estacionei Estacionamento</b>, entendemos que encontrar um lugar para estacionar pode ser estressante e demorado. 
                  É por isso que oferecemos uma ampla gama de serviços para atender às necessidades de todos os nossos clientes, desde 
                  estacionamentos cobertos até opções de estacionamento ao ar livre e serviços de manobrista.
                </p> <br>
                <p class="cinza-text">
                  Nossa equipe altamente treinada e dedicada está sempre disponível para ajudar nossos clientes, fornecendo orientação e 
                  assistência sempre que necessário. Além disso, temos tecnologia de ponta que nos permite monitorar e gerenciar nosso 
                  espaço de estacionamento de maneira eficiente, garantindo que nossos clientes possam estacionar com facilidade e 
                  segurança.
                </p> <br>
                <p class="cinza-text">
                  No <b class="verdinho-text">Estacionei Estacionamento</b>, nosso objetivo é fornecer serviços de estacionamento excepcionais e tornar a experiência 
                  de nossos clientes o mais agradável possível. Estamos comprometidos em manter altos padrões de qualidade em todas as 
                  áreas do nosso negócio e trabalhar constantemente para melhorar nossos serviços e tecnologias para atender às 
                  necessidades em constante mudança de nossos clientes.
                </p> <br>
                <p class="cinza-text">
                  Se você está procurando um serviço de estacionamento confiável e acessível para atender às suas necessidades, o 
                  <b class="verdinho-text">Estacionei Estacionamento</b> é a escolha certa para você. Entre em contato conosco hoje para saber mais sobre nossos 
                  serviços e opções de estacionamento. Estamos ansiosos para ajudá-lo a encontrar a solução perfeita para suas 
                  necessidades de estacionamento.
                </p>
              </div>
            </div>
          </div>
        </section> <br> <br>
        <div id="divisor"></div>
        <section id="avaliacoes" class="container">
          <h2>AVALIAÇÕES</h2>
          <hr class="underline">
          <div class="row">
            <div class="col l6 m5 ">
              <div class="card-panel teal avaliacao">
                <span class="cinza-text">"Estou muito satisfeito com o serviço de estacionamento mensal que uso na 
                  Estacionei Estacionamento. Eles oferecem vagas cobertas e o processo de pagamento é fácil e rápido. 
                  Além disso, a equipe é muito atenciosa e prestativa. Sem dúvida, um dos melhores estacionamentos que 
                  já utilizei." 
                  <p class="verdinho-text"> - João Santos</p>
                </span>
              </div>
            </div>
            <div class="col l6 m5 ">
              <div class="card-panel teal avaliacao">
                <span class="cinza-text">"Excelente atendimento! O serviço de estacionamento valet é muito prático e os funcionários 
                  são sempre muito educados e prestativos. Eles garantem que meu carro esteja sempre limpo e em ordem quando o 
                  devolvem. Recomendo a Estacionei Estacionamento para quem busca um serviço de estacionamento de qualidade." 
                  <p class="verdinho-text">- Ana Paula Costa</p>
                </span>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col l6 m5 offset-l3">
              <div class="card-panel teal avaliacao">
                <span class="cinza-text">"Estou muito feliz com o serviço de estacionamento da Estacionei Estacionamento. 
                  Eles são sempre pontuais e oferecem um serviço de primeira qualidade. O atendimento ao cliente é excepcional 
                  e o estacionamento é muito seguro. Definitivamente recomendo a Estacionei Estacionamento para quem precisar 
                  de um estacionamento confiável e seguro."  
                  <p class="verdinho-text"> - Maria Silva</p>
                </span>
              </div>
            </div>
          </div>
        </section>
    </main>
    <footer class="">
      <img class="" src="img/logo2.png" alt="" />
    </footer>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

</body>
</html>