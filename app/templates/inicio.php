<?php ob_start() ?>

				<!-- TARJETAS DE PRUEBA -->
				<div class="cards">
					<ul class="card_list" id="card_list">
						<li class="card_item naranja" id="draggable"> <!--ui-widget-content-->
							<div class="card_info">
								<div class="info-alimento">
									<img class="info-foto" src="../web/images/galletas.jpg" alt="">
									<p class="info-nombre_alimento"><small>Galletas</small><br>19/05/2018</p>
								</div>
								<div class="info-dias">7 días</div>
							</div>
						</li>
						<li class="card_item azulclaro" id="draggable">
							<div class="card_info">
								<div class="info-alimento">
									<img class="info-foto" src="../web/images/salmon.jpg" alt="">
									<p class="info-nombre_alimento"><small>Salmón</small><br>23/05/2018</p>
								</div>
								<div class="info-dias">10 días</div>
							</div>
						</li>
						<li class="card_item azul" id="draggable">
							<div class="card_info">
								<div class="info-alimento">
									<img class="info-foto" src="../web/images/tomate.jpg" alt="">
									<p class="info-nombre_alimento"><small>Tomates</small><br>18/05/2018</p>
								</div>
								<div class="info-dias">6 días</div>
							</div>
						</li>

						<?php foreach ($params['alimento'] as $alimento) :?>
							<option value="<?php echo $tipo['id'] ?>"><?php echo ucfirst($tipo['nombre']) ?></option>
						<?php endforeach; ?>
					</ul>
				</div>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?> 
