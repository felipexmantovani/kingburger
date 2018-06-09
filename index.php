<!DOCTYPE html>
<?php
	 if (isset ($_GET["p"]) ) {
		$p = $_GET["p"];
		//mostra conteudo
		//echo $p;
	}else{
		$p = "home";
	}

	//nome do arquivo
	$pagina = "paginas/".$p.".php";
?>
<html>
<head>
	<title>King Burger</title>
	<meta charset="utf-8">
	<meta name="description" content="A melhor hamburgueria do Brasil">

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- <base href="http://localhost/kingburger/"> -->
	<base href="http://felipemantovani.com.br/pos/kingburger/">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="shortcut icon" href="images/logo.png">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<?php
		if ($p == "home"){ ?>
		<header class="header_home">
	<?php
		} else { ?>
		<header class="header_interna">	
	<?php } ?>
			<nav class="flex">
			<div class="logotipo flex_wrap flex_1">
				<a href="./" title="King Burger">
					<img src="images/kingburger.png" alt="King Burger">
				</a>
			</div>

			<button id="menu" type="button">
				<i class="fas fa-bars"></i>
			</button>

			<div class="nav_menu flex_wrap flex_1">
				<ul>
					<li><a href="./" title="Home">Home</a></li>
					<li><a href="sobre" title="Sobre">Sobre</a></li>
					<li><a href="cardapio" title="Cardápio">Cardápio</a></li>
					<li><a href="contato" title="Contato">Contato</a></li>
				</ul>
			</div>
		</nav>

		<div class="clear"></div>

		<?php
		if ($p == "home"){ ?>

			<div class="flex">
				<div class="flex_1">
					<div class="msg">
						<h1>Max Mega Burger</h1>
						<p>4 Hamburgueres de Carne, 4 Camadas de Bacon Crocante</p>
						<a class="btn" href="cardapio" title="Ver cardápio">Ver cardápio</a>
					</div>
				</div>

				<div class="flex_1">
					<div class="hamburger">
						<div class="fumaca">
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
							<i></i>
						</div>
						<img src="images/10.png" alt="Hamburger">
					</div>
					
				</div>
			</div>

		<?php } ?>
		
	</header>

	<main>
		<?php
			//verificar se a pagina existe
			if (file_exists($pagina) ) {
				include $pagina;
			}else{
				include "paginas/404.php";
			}
		?>
	</main>

	<div class="bacon"></div>

	<footer>
		<div class="container">
			<div class="flex">
				<div class="item flex_1">
					<h5>Menu de Acesso</h5>
					<nav>
						<ul>
							<li><a href="./" title="Home">Home</a></li>
							<li><a href="sobre" title="Sobre">Sobre</a></li>
							<li><a href="cardapio" title="Cardápio">Cardápio</a></li>
							<li><a href="contato" title="Contato">Contato</a></li>
						</ul>
					</nav>
				</div>
				<div class="item flex_1">
					<div class="fb-page" data-href="https://www.facebook.com/professorburnes/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/professorburnes/" class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/professorburnes/">ProfessorBurnes</a>
						</blockquote>
					</div>
				</div>
				<div class="item flex_1">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.672563547738!2d-53.315134982296264!3d-23.759053127876996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d40292269565%3A0x34c0ef5f4ffa7009!2sCol%C3%A9gio+e+Faculdade+ALFA+de+Umuarama!5e0!3m2!1spt-BR!2sbr!4v1522532308975" width="" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<p>Desenvolvido por Tidinho - Todos os Direitos Reservados</p>
	</footer>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.12&appId=594865624207744&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<script type="text/javascript">
		$('#menu').click(function(){
			$('header nav ul').slideToggle('slow');
		});
	</script>

</body>
</html>