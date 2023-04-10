<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mapa de Localização</title>
        <!--Import Google Icon Font-->
        <link
          href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet"
        />
        <!--Import materialize.css-->
        <link
          type="text/css"
          rel="stylesheet"
          href="../css/materialize.css"
          media="screen,projection"
        />
        <!-- Import CSS Style -->
        <link rel="stylesheet" href="../css/menu-hamburguer.css" />
        <link rel="stylesheet" href="../css/footer.css" />
        <link rel="stylesheet" href="../css/header.css" />
        <link rel="stylesheet" href="../css/mapa/style.css" />
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

	<!-- icones = direction car e pindrop -->
<body>
	<header>
      <img class="col s4" src="../img/logo.png" alt="" />
      <div class="col s4">
        <nav class="nav-content black">
            <ul class="black">
                <li><a class="nav-item" href="novidades.html">NOVIDADES</a></li>
                <li><a class="nav-item" href="../index.php#sobre-nos">SOBRE NÓS</a></li>
                <li><a class="nav-item" href="../index.php">HOME</a></li>
                <li><a class="nav-item nav-item-current" href="mapa.php">MAPA DE LOCALIZAÇÃO</a></li>
                <li><a class="nav-item" href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
      </div>
 
      <input id="menu-hamburguer" type="checkbox">
      <label  for="menu-hamburguer">
        <img id="icon-menu" src="../img/menu.png" alt="">
      </label>
      <label class="menu-hamburguer">
        <nav class="nav-content2">
          <ul class="black">
              <li><a class="nav-item" href="novidades.html">NOVIDADES</a></li>
              <li><a class="nav-item" href="../index.php#sobre-nos">SOBRE NÓS</a></li>
              <li><a class="nav-item" href="../index.php">HOME</a></li>
              <li><a class="nav-item nav-item-current" href="mapa.php">MAPA DE LOCALIZAÇÃO</a></li>
              <li><a class="nav-item" href="contato.php">CONTATO</a></li>
          </ul>
      </nav>
      </label>
    </header>

	<div class="section row cinza1">
		<div class="container valign-wrapper" id="banner">
			<div class="col s6">
				<h3 class="green1-text">Onde estamos</h3>
				<p class="white-text flow-text">Saiba onde encontrar nossos estacionamentos</p>
			</div>
			<div class="col s6 center-align" id="icons-banner">
				<i class="medium material-icons">directions_car</i>
				<!-- <i class="large material-icons">pin_drop</i> -->
				<i class="medium material-icons">directions</i>
			</div>
		</div>
	</div>

	<main class="container">
		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21913.66692488083!2d-46.636391163207634!3d-23.589814800702705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5be163d6555b%3A0x8277d4367a4bf1c9!2sSESI!5e0!3m2!1spt-BR!2sbr!4v1679343044022!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="card-content">
						<span class="card-title">Ipiranga</span>
						<p>R. Bom Pastor, 654 - Ipiranga, São Paulo - SP, 04203-050</p>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68216.81190851929!2d-46.74869060163014!3d-23.64363278629467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5afae092693d%3A0xf823896922271ef9!2sSenac%20Jabaquara!5e0!3m2!1spt-BR!2sbr!4v1679343324350!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="card-content">
						<span class="card-title">Jabaquara</span>
						<p>Av. do Café, 298 - Jabaquara, São Paulo - SP, 04311-000</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.8608793539815!2d-46.725844175620914!3d-23.6451528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce510e8d3746ed%3A0x3e9f3a76e1ebfb69!2sEscola%20Senai%20Su%C3%AD%C3%A7o-Brasileira%20Paulo%20Ernesto%20Tolle!5e0!3m2!1spt-BR!2sbr!4v1679337649551!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="card-content">
						<span class="card-title">João Dias</span>
						<p>R. Bento Branco de Andrade Filho, 379 - Santo Amaro, São Paulo - SP, 04757-000</p>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14616.88544605768!2d-46.69602053686525!3d-23.668040533291187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5036539648d5%3A0x78501a72680ea23a!2sCentro%20Universit%C3%A1rio%20Senac%20-%20Santo%20Amaro!5e0!3m2!1spt-BR!2sbr!4v1679599589346!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="card-content">
						<span class="card-title">Jurubatuba</span>
						<p>Av. Eng. Eusébio Stevaux, 823 - Santo Amaro, São Paulo - SP, 04696-000</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68209.7347551036!2d-46.717251669521474!3d-23.65720654425292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50f8ac76dfdb%3A0xc160a87f059ec93d!2sSenac%20Largo%20Treze!5e0!3m2!1spt-BR!2sbr!4v1679343386812!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="card-content">
						<span class="card-title black-text">Largo Treze</span>
						<p>R. Dr. Antônio Bento, 393 - Santo Amaro, São Paulo - SP, 04750-000</p>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56245.73608726406!2d-46.663661292952426!3d-23.698519542267398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce44c4f557f3cb%3A0xe26e37b025979cce!2sSESI%20Diadema!5e0!3m2!1spt-BR!2sbr!4v1679341895075!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="card-content">
						<span class="card-title black-text">Taboão</span>
						<p>Av. Paranapanema, 1500 - Taboão, Diadema - SP, 09930-450</p>
					</div>
				</div>
			</div>	
		</div>	
	</main>
	
	<footer>
		<img class="col s4" src="../img/logo2.png" alt="">
	</footer>
	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>