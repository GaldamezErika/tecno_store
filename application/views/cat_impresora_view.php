<body>
	<?php $this->load->view('nabvar'); ?>


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Impresoras</h3>
						<div class="section-nav">
						</div>
					</div>
					<!-- /section title -->

					<!-- product -->
					<div id="productos">

						<?php foreach($impresoras as $imp){ ?>

							<div class="col-md-3 col-xs-6" id="productos">
								<div class="product">
									<div class="product-img">
										<img src="<?= base_url('').$imp->imagen ?>" alt="">
										<div class="product-label">
											<span class="new">Nuevo</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?= $imp->nombre_categoria ?></p>
										<h3 class="product-name"><?= $imp->descripcion ?></h3>
										<h4 class="product-price">$<?= $imp->precio_venta ?></h4>
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">	
										<a href="<?php echo base_url('home_controller/get_datos/'.$imp->id_producto) ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Ver Detalles</button></a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>

				</div>
				<!-- /product -->

				<div class="clearfix visible-sm visible-xs"></div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- HOT DEAL SECTION -->
	<div id="hot-deal" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="hot-deal">
						<ul class="hot-deal-countdown">
							<li>
								<div>
								</div>
							</li>
							<li>
								<div>
								</div>
							</li>
							<li>
								<div>
								</div>
							</li>
							<li>
								<div>
								</div>
							</li>
						</ul>
						<h2 class="text-uppercase">OFERTA CALIENTE ESTA SEMANA</h2>
						<p>HASTA 50% DE DESCUENTO</p>
						<a class="primary-btn cta-btn" href="#">Compra ahora</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOT DEAL SECTION -->