<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">

	<div class="container">

		<div class="row">

			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">

				<ul>
<?php
$social = ControladorPlantilla::ctrEstilosPlantilla();
$jsonredesSociales =json_decode($social["redesSociales"],true);

foreach ($jsonredesSociales as $key => $value) {
echo'	<li>
		<a href="'.$value["url"].'" target="_blank">
			<i class="fa '. $value["red"].' redSocial '. $value["estilo"].' " aria-hidden="true"></i>
		</a>
	</li>';
}
?>
			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">

				<ul>

					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid">

	<div class="container">

		<div class="row" id="cabezal">

			<!--=====================================
			LOGOTIPO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

				<a href="#">

					<img src="http://localhost/E-Commerce-/backend/<?php echo $social["logo"] ?>" class="img-responsive">

				</a>

			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">

					<p>CATEGORÍAS

						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>

					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->

				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">

					<span class="input-group-btn">

						<a href="#">

							<button class="btn btn-default backColor" type="submit">

								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>

			</div>

			<!--=====================================
			CARRITO DE COMPRAS
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">

				<a href="#">

					<button class="btn btn-default pull-left backColor">

						<i class="fa fa-shopping-cart" aria-hidden="true"></i>

					</button>

				</a>

				<p>TU CESTA <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->

		<div class="col-xs-12 backColor" id="categorias">

			<?php
			$categorias =ControladorProductos::ctrMostrarCategorias();
			var_dump($categorias);
			?>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

		</div>

	</div>

</header>
