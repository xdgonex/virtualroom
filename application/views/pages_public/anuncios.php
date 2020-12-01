<div class="container">
	<div class="properties-listing spacer">

		<div class="row">
			<div class="col-lg-3 col-sm-4 ">

				<div class="search-form">
					<h4><span class="glyphicon glyphicon-search"></span> Buscar por</h4>
					<input type="text" class="form-control" placeholder="Buscar por titulos">
					<div class="row">
						<div class="col-lg-7">
							<select class="form-control">
								<option>Precio</option>
								<option>S/. 550.00</option>
								<option>S/. 700.00</option>
								<option>S/. 1,000.00</option>
								<option>S/. 1,200.00</option>
							</select>
						</div>
						<div class="col-lg-5">
							<select class="form-control">
								<option>Distrito</option>
								<option>Comas</option>
								<option>Carabayllo</option>
								<option>Puente Piedra</option>
							</select>
						</div>
					</div>

					<button class="btn btn-primary">Buscar</button>

				</div>



				<div class="hot-properties hidden-xs">
					<h4>Recomendados</h4>
					<form action="detalle-anuncio" method="POST">
						<?php
						foreach ($anuncio as $a) { ?>

							<div class="row">
								<div class="col-lg-4 col-sm-5"><img src="<?php echo base_url('uploads/files/' . $a->NOMB_FOTO) ?>" class="img-responsive img-circle" alt="properties">
								</div>
								<div class="col-lg-8 col-sm-7">
									<p class="price"> Ubicacion : <?= $a->DIRECCION ?>, <?php echo strtolower("" . $a->NOMB_DISTRITO) ?> </p>
									<p class="price"> Precio : s/. <?= $a->PRECIO_MES ?></p>
									<h5>
										<button class="btn btn-primary" id="btnDetalle" name="btnDetalle" type="submit" value="<?= $a->ID_ANUNCIO ?>">Ver Detalle</button>
									</h5>
								</div>
							</div>

						<?php
						} ?>
					</form>
				</div>
			</div>




			<div class="col-lg-9 col-sm-8">
				<div class="sortby clearfix">
					<div class="pull-left result">Showing: 12 of 100 ></div>
					<div class="pull-right">
						<select class="form-control">
							<option>Precio</option>
							<option>S/. 550.00</option>
							<option>S/. 700.00</option>
							<option>S/. 1,000.00</option>
							<option>S/. 1,200.00</option>
						</select>
					</div>

				</div>
				<div class="row">

					<form action="detalle-anuncio" method="POST">


						<?php foreach ($anuncio as $a) { ?>
							<div class="col-lg-4 col-sm-6">
								<div class="properties">
									<input type="hidden" name="id_anuncio" value="1">
									<div class="image-holder"><img class="cover-img" src="<?php echo base_url('uploads/files/' . $a->NOMB_FOTO) ?>" class="img-responsive img-anuncios" alt="properties" />
									</div>
									<h4>
										<a href="detalle-anuncio"><?= $a->TITULO_ANUNCIO ?></a>
									</h4>
									<p class="price">Price: S/. <?= $a->PRECIO_MES ?></p>
									<div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Muy Bueno">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bueno">4</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Normal">3</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Malo">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Muy Malo">1</span> </div>
									<button class="btn btn-primary" id="btnDetalle" name="btnDetalle" type="submit" value="<?= $a->ID_ANUNCIO ?>">Ver Detalles</button>
								</div>
							</div>
						<?php } ?>

					</form>
				</div>
				<!-- properties -->
				<!-- properties -->

				<!-- properties -->
				<div class="row">
					<div class="center">
						<ul class="pagination">
							<li><a href="#">«</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>