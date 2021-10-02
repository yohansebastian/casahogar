<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>Nuevo Porvenir</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondo">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					Nuevo Porvenir
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<div class="container mt-5">
			<div class="row">
				<div class="col col-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
								class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
								aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
								aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="foto1">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="foto2">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="foto3">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Anterior</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Siguiente</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-2">
			<div class="row">
				<div class="col col-12 d-flex justify-content-center">
					<h2 class="fuente">Hogar de animales <span class="parrafo">NUEVO PORVENIR</span> </h2>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-2">
			<div class="row d-flex justify-content-center">
				<div class="col col-5 text-center">
					<p>
					Casa hogar Nuevo Porvenir, atiende desde 1996 animales y fauna silvestre en estado de  abandono, ofreciendo atención integral, además somos fabricantes de comida y accesorios para todo tipo de mascotas.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-5">
			<div class="row d-flex justify-content-center">
				<div class="col col-1">
					<img src="<?= base_url('public/img/dog-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Perros</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/cat-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Gatos</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/bird-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Aves</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/fish-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">reptiles</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/horse-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Caballos</p>
				</div>
			</div>
		</div>
	</section>
	<section class="fondoAplicacion">
	</section>
	<section>
		<div class="container">
			<div class="row d-flex justify-content-start">
				<div class="col col-6">
					<img src="<?= base_url('public/img/refugio.jpg') ?>" class="img-fluid w-100">
				</div>
				<div class="col-4 text-center">
					<p>
					Casa hogar Nuevo Porvenir, atiende desde 1996 animales y fauna silvestre en estado de  abandono, ofreciendo atención integral, además somos fabricantes de comida y accesorios para todo tipo de mascotas.
					Casa hogar Nuevo Porvenir, atiende desde 1996 animales y fauna silvestre en estado de  abandono, ofreciendo atención integral, además somos fabricantes de comida y accesorios para todo tipo de mascotas.
					Casa hogar Nuevo Porvenir, atiende desde 1996 animales y fauna silvestre en estado de  abandono, ofreciendo atención integral, además somos fabricantes de comida y accesorios para todo tipo de mascotas.
					</p>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
	</script>
	<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>

</html>