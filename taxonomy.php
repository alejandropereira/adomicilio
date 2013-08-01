<?php get_header(); ?>
<section id="main-content" role="main">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<a href="<?php bloginfo('url'); ?>" class="back-btn">Regresar al inicio</a>
				<div id="search-results">
					<?php 
						$term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
					 ?>
					<h1>Categoría: <?php echo $term->name; ?></h1>
					<div class="select sort-select">
						<label>Ordenado por:</label>
						<select>
							<option>Nombre</option>
							<option>Camaras</option>
						</select>
					</div>
					<div class="order-btns clearfix">
						<button class="list active">Lista</button>
						<button class="block">Bloque</button>
					</div>
				</div>
<!-- 				<div id="directory">
					<h1>Directorio - Encuentra todo lo que necesitas a domicilio</h1>
				</div>
				<div id="advanced-search" class="clearfix">
					<div class="field">
						<label>Producto</label>
						<div class="select">
							<select>
								<option>Nombre</option>
								<option>Camaras</option>
							</select>
						</div>
					</div>
					<div class="field">
						<label>Categoría</label>
						<div class="select">
							<select>
								<option>Nombre</option>
								<option>Camaras</option>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					<hr>
					<div class="field city">
						<label>Ciudad</label>
						<div class="select">
							<select>
								<option>Guatemala</option>
								<option>Peten</option>
							</select>
						</div>
					</div>
					<div class="field zone">
						<label>Zona</label>
						<div class="select">
							<select>
								<option>13</option>
								<option>12</option>
							</select>
						</div>
					</div>
					<div class="field schedule">
						<label>Horario</label>
						<div class="select">
							<select>
								<option>13:00 AM</option>
								<option>12</option>
							</select>
						</div>
						<span class="div">-</span>
						<div class="select">
							<select>
								<option>13:00 AM</option>
								<option>12</option>
							</select>
					</div>
					</div>
					<div class="field">
						<input type="submit" value="filtrar">
					</div>
				</div> -->
				<div id="listings">
					<?php if (have_posts()) :  while(have_posts()) : the_post();?>
					<div class="listing clearfix list">
						<div class="right">
							<h1><?php the_title(); ?> <span class="rating four-stars"></span></h1>
							<p class="info"><?php echo get_post_meta(get_the_ID(), 'ad_telefono', true); ?> / <?php echo get_post_meta(get_the_ID(), 'ad_web', true); ?></p>	
						</div>
						<div class="left">							
							<?php 
								$id = get_the_id();
								$terms = get_the_terms($id, 'cobertura'); 

								$cats = array();

								foreach ($terms as $term) {
									$cats[] = $term->name;
								}
							?>
							<?php 
								$apertura = get_post_meta(get_the_ID(), 'ad_apertura', true);
								$cierre = get_post_meta(get_the_ID(), 'ad_cierre', true);	 
							?>
							<p><strong>Zonas de cobertura: </strong><?php echo implode(", ", $cats) ?><!-- <span class="rating four-stars dis-list"></span> --></p>
							<p><strong>Horarios de atención: </strong><?php echo trim($apertura); ?> - <?php echo trim($cierre); ?></p>
						</div>
					</div>
					<?php endwhile; get_pagination(); endif; ?>
					<div class="listing-ad">
						<img src="<?php bloginfo('template_url'); ?>/images/468x60.png" alt="468x60 Ad">
					</div>
				</div>
			</div>
			<div class="span4">
				<div id="search">
					<input type="text" placeholder="Busca y encuentra aquí">
					<input type="submit" value="Buscar">
				</div>
				<div class="search-ad">
					<img src="<?php bloginfo('template_url'); ?>/images/300x250.png" alt="300x250 Ad">
				</div>
				<div id="tabs">
				  <ul class="tabs clearfix">
				    <li><a href="#tabs-1" class="alizarin">+ Calificados</a></li>
				    <li><a href="#tabs-2" class="cyan">+ Populares</a></li>
				    <li><a href="#tabs-3" class="carrot">+ Recientes</a></li>
				  </ul>
				  <div id="tabs-1">
				    <div class="top-widget alizarin">
						<section class="block slide1">
							<ul class="slides">
								<li>
									<article class="clearfix">
										<h2>
											<a href="#">Nombre del Negocio1</a>
											<div class="infotip">
												<h1>Nombre del negocio1</h1>
												<p>Guatemala</p>
												<table>
													<tr>
														<td class="heading"><strong>Producto</strong></td>
														<td>Producto</td>
													</tr>
													<tr>
														<td class="heading"><strong>Categoría</strong></td>
														<td>Categoría</td>
													</tr>
													<tr>
														<td class="heading"><strong>Zonas de cobertura</strong></td>
														<td>7,9,11,13,16</td>
													</tr>
													<tr>
														<td class="heading"><strong>Horario de atención</strong></td>
														<td>8:00 AM - 11:00 PM</td>
													</tr>
												</table>
												<p class="info">2222-2222 / www.website.com</p>
											</div>
										</h2>
										<span class="tag">250</span>
										
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio2</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio3</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio4</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio5</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio6</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio7</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio8</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio9</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio10</a></h2>
										<span class="tag">25</span>
									</article>							
								</li>
								<li>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio11</a></h2>
										<span class="tag">250</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio12</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio13</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio14</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio15</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio16</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio17</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio18</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio19</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio20</a></h2>
										<span class="tag">25</span>
									</article>							
								</li>
							</ul>
						</section>
					</div>
				  </div>
				  <div id="tabs-2">
				    <div class="top-widget cyan">
						<section class="block slide2">
							<ul class="slides">
								<li>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio1</a></h2>
										<span class="tag">250</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio2</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio3</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio4</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio5</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio6</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio7</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio8</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio9</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio10</a></h2>
										<span class="tag">25</span>
									</article>							
								</li>
								<li>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio11</a></h2>
										<span class="tag">250</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio12</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio13</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio14</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio15</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio16</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio17</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio18</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio19</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio20</a></h2>
										<span class="tag">25</span>
									</article>							
								</li>
							</ul>
						</section>
					</div>
				  </div>
				  <div id="tabs-3">
			    	<div class="top-widget carrot">
						<section class="block slide3">
							<ul class="slides">
								<li>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio1</a></h2>
										<span class="tag">250</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio2</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio3</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio4</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio5</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio6</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio7</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio8</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio9</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio10</a></h2>
										<span class="tag">25</span>
									</article>							
								</li>
								<li>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio11</a></h2>
										<span class="tag">250</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio12</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio13</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio14</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio15</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio16</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio17</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio18</a></h2>
										<span class="tag">25</span>
									</article>							
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio19</a></h2>
										<span class="tag">25</span>
									</article>
									<article class="clearfix">
										<h2><a href="#">Nombre del Negocio20</a></h2>
										<span class="tag">25</span>
									</article>							
								</li>
							</ul>
						</section>
					</div>	
				  </div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="middle-ad">
					<img src="<?php bloginfo('template_url'); ?>/images/728x90.png" alt="728x90 Ad">
				</div>
			</div>
		</div>
	</div>	
</section>
<?php get_footer(); ?>