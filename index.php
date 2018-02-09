<?php include("header.php");?>
	<main>
		<section class="page Index">
			<div class="container">
				<div class="row">
					<div class="col-8">
						<h1 class="page-title"><span>Somos Tetrabid</span> Agencia de diseño gráfico, web y técnico</h1>
						<p class="page-description">Ofrecemos nuestros servicios a nivel mundial, buscando generar oportunidades al talento Venezolano de expandirse y crecer juntos, para asi brindar soluciones ante los requerimientos planteados por nuestros clientes.</p>
						<a class="button button-cta" href="nosotros.php">Saber mas</a>
					</div>
				</div>
			</div>
			<div class="page-bg_color"></div>
		</section>
		<?php include("inc/services.php");?>
		<section class="Projects">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-4">
						<h3 class="Projects-title">Nuestros Proyectos</h3>
						<ul class="menu">
							<li><a href=""><img class="Projects-icon" src="img/icon-electronico.svg" alt="Diseño Electrónico">Electrónico</a></li>
							<li><a href=""><img class="Projects-icon" src="img/icon-web.svg" alt="Diseño Web">Web</a></li>
							<li><a href=""><img class="Projects-icon" src="img/icon-grafico.svg" alt="Diseño Gráfico">Gráfico</a></li>
							<li><a href=""><img class="Projects-icon" src="img/icon-tecnico.svg" alt="Diseño Técnico">Técnico</a></li>
						</ul>
					</div>
					<div class="col-8">
						<div class="row">
							<div class="col-6">
								<article class="Projects-content">
									<a href="">
										<figure>
											<img class="img-fluid" src="img/thumbnail-proyecto-01.jpg" alt="Proyecto 01"/>
										</figure>
										<h3 class="Projects-content-title">Tesla: Render Model S</h3>
									</a>
								</article>
								<article class="Projects-content">
									<a href="">
										<figure>
											<img class="img-fluid" src="img/thumbnail-proyecto-02.jpg" alt="Proyecto 02"/>
										</figure>
										<h3 class="Projects-content-title">INtel: Render Brazo Robótico</h3>
									</a>
								</article>
							</div>
							<div class="col-6">
								<article class="Projects-content">
									<a href="">
										<figure>
											<img class="img-fluid" src="img/thumbnail-proyecto-03.jpg" alt="Proyecto 03"/>
										</figure>
										<h3 class="Projects-content-title">Deal Yard: Sitio Web</h3>
									</a>
								</article>
								<article class="Projects-content">
									<a href="">
										<figure>
											<img class="img-fluid" src="img/thumbnail-proyecto-04.jpg" alt="Proyecto 04"/>
										</figure>
										<h3 class="Projects-content-title">Valve: Identidad Corporativa</h3>
									</a>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="Blog">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="card-deck">
							<div class="card">
								<article class="Blog-contenent">
									<figure>
										<img class="img-fluid" src="img/thumbnail-blog-01.jpg" alt="Noticia 01"/>
									</figure>
									<h3 class="Blog-title">Miopía, un documental sobre el éxito en el mundo del diseño</h3>
									<p class="Blog-excerpt">Aunque tiene ya un tiempo, este documental producido por Atipus está volviendo a ser compartido por diversos medios y es una buena oportunidad para que los que...</p>
									<a class="button button-cta" href="blog-detalle.php">Seguir Leyendo</a>
								</article>
							</div>
							<div class="card">
								<article class="Blog-contenent">
									<figure>
										<img class="img-fluid" src="img/thumbnail-blog-02.jpg" alt="Noticia 02"/>
									</figure>
									<h3 class="Blog-title">Top 10 de cursos online de diseño e ilustración que deberías hacer</h3>
									<p class="Blog-excerpt">De los muchísimos cursos que componen el amplio catálogo de Domestika, en Macho Dominante hemos seleccionado un top 10 con los mejores, que además puedes...</p>
									<a class="button button-cta" href="blog-detalle.php">Seguir Leyendo</a>
								</article>
							</div>
							<div class="card">
								<article class="Blog-contenent">
									<figure>
										<img class="img-fluid" src="img/thumbnail-blog-03.jpg" alt="Noticia 03"/>
									</figure>
									<h3 class="Blog-title">TETRABID lanza Cupra, su nueva marca deportiva internacional</h3>
									<p class="Blog-excerpt">Cupra se independiza y a partir de ahora será la marca deportiva de SEAT, de la que ya conocemos su logotipo, donde destaca el uso del bronce, como ya se…</p>
									<a class="button button-cta" href="blog-detalle.php">Seguir Leyendo</a>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include("inc/marketing.php");?>
	</main>
<?php include("footer.php");?>