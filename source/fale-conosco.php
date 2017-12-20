<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Lapa Advogados Associados é um escritório de advocacia com foco na qualidade técnica de seus trabalhos e no atendimento individualizado de cada cliente.">
	<meta name="author" content="Lapa Advogados Associados">
	<meta name="keywords" content="Lapa advogados associados, advogados rio de janeiro, lapa advogados, negocios empresariais, contrato, contencioso de massa e estratégico, M&A, societário, governança corporativa, direito do entretenimento">
	<title>Lapa Advogados</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header class="header-lapa">
		<div class="container-header">
			<a href="index.html"><img src="img/lapa_logo.png" alt="Lapa Advogados" class="lapa-logo"></a>
			<i class="fa fa-bars" aria-hidden="true"></i>

			<nav class="navbar-lapa">
				<ul class="nav-list">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="esc-parceiro.html" class="nav-link">Consultores Externos</a></li>
					<li class="nav-item"><a href="socios.html" class="nav-link">Equipe</a></li>
					<li class="nav-item"><a href="fale-conosco.html" class="nav-link">Fale Conosco</a></li>
				</ul>			
			</nav>
		</div><!--container-header-->				
	</header><!--header-lapa-->
	
	<div class="space"></div>

	<section class="cabecalho">
		<div class="container-cabecalho">
			<h2 class="titulo-cabecalho">Fale Conosco</h2>
			<h3 class="sub-titulo-cabecalho">Tire sua duvida</h3>
		</div>					
	</section><!--germano-->
	
	<section class="fale-conosco">
		<div class="container-fale-conosco">
			<div class="container-fale-conosco-1">
				<h2 class="titulo-fale-conosco">Envie sua mensagem</h2>
				<h3 class="sub-titulo-fale-conosco">Retornaremos o mais breve possivel.</h3>
				
				<form action="envia.php" method="POST">
					
					<input type="text" class="input-fale-conosco" name="nome" placeholder="Nome"  id="nome" minlength="4" pattern="[a-z\]+$" required>
					<input type="email" name="email" placeholder="Email" class="input-fale-conosco">
					<input type="text" class="input-fale-conosco" name="assunto" placeholder="Assunto"  id="assunto" minlength="4" required>
					<textarea name="mensagem" placeholder="Mensagem"  id="mensagem"  minlength="4" required></textarea>
					
					<input type="submit" value="Enviar" id="enviar"><br>

				</form>
			</div><!--container-fale-conosco-1-->		
		

			<div class="container-fale-conosco-1">
				<div id="googleMap" class="maps-fale-conosco"></div>
				<div class="endereco-fale-conosco">
					<p class="texto-endereco">Lapa Advogados</p>
					<p class="texto-endereco">Telefone: +55 (21) 3916-7272</p>
					<p class="texto-endereco">Rua do Mercado, 11 - 20° Andar - Centro</p>
					<p class="texto-endereco">CEP: 20010-120 - Rio de Janeiro - RJ</p>
				</div>

				
			</div><!--container-fale-conosco-1-->
		</div><!--container-fale-conosco-->
	</section><!--fale-conosco-->




	<footer>
		<div class="container-footer-3">
			<div class="container-footer-2">
				<a href="#" class="link-footer"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" class="link-footer"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#" class="link-footer"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				<a href="#" class="link-footer"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</div><!--container-footer-2-->			
		</div><!--container-footer-->
	</footer>

<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/app.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/google-maps.js"></script>

	
</body>
</html>