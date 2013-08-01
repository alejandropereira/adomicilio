<?php get_header(); ?>
<section id="main-content" role="main">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<div id="directory">
					<h1>Directorio - Encuentra todo lo que necesitas a domicilio</h1>
					<?php 
						$args = array(
							'theme_location' => 'categories_menu', 
							'items_wrap' => '<ul id="%1$s" class="%2$s category-menu">%3$s</ul>'
						); 

						wp_nav_menu($args);
					?>
<!-- 					<ul class="category-menu">
						<li class="icon-mobile">
							<a href="#">Mobile</a>
							<ul class="submenu">
								<li><a href="#"><i class="icon-message"></i></a></li>
								<li class="current"><a href="#"><i class="icon-flag">Nombre</i></a></li>
								<li><a href="#"><i class="icon-flag"></i></a></li>
							</ul>
						</li>
						<li class="icon-message"><a href="#"></a></li>
						<li class="icon-flag"><a href="#"></a></li>
						<li class="icon-flag"><a href="#"></a></li>
						<li class="icon-camera"><a href="#"></a></li>
						<li class="icon-art"><a href="#"></a></li>
						<li class="icon-config"><a href="#"></a></li>
						<li class="icon-tag"><a href="#"></a></li>
						<li class="icon-movie"><a href="#"></a></li>
						<li class="icon-movie"><a href="#"></a></li>
						<li class="icon-buy"><a href="#"></a></li>
						<li class="icon-buy"><a href="#"></a></li>
					</ul> -->
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
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4 top-widget alizarin">
				<h1>Los + Calificados</h1>
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
			<div class="span4 top-widget cyan">
				<h1>Los + Populares</h1>
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
			<div class="span4 top-widget carrot">
				<h1>Los + Recientes</h1>
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
		<div class="row-fluid">
			<div class="span12">
				<div class="middle-ad">
					<img src="<?php bloginfo('template_url'); ?>/images/728x90.png" alt="728x90 Ad">
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4">
				<div class="form carrot">
					<h1>Crea tu cuenta</h1>
					<div class="block">
						<p>Crea una cuenta en aDomicilio.gt para guardar y compartir tus lugares favoritos.</p>
						<input type="text" placeholder="Nombre">
						<input type="email" placeholder="info@info.com">
						<input type="password" placeholder="Password">
						<input type="submit" value="Crear">
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="bottom-ad">
					<img src="<?php bloginfo('template_url'); ?>/images/300x250.png" alt="300x250 Ad">
				</div>
			</div>
			<div class="span4">
				<div class="form gray">
					<h1>Lista tu negocio aquí</h1>
					<div class="block">
						<p>Envianos los datos de tu negocio, nosotros te contactaremos para más información.</p>
						<input type="text" placeholder="Nombre">
						<input type="email" placeholder="info@info.com">
						<div class="field">
							<div class="select">
								<select>
									<option>Producto</option>
									<option>Camaras</option>
								</select>								
							</div>
							<div class="select last">
								<select>
									<option>Categoría</option>
									<option>Camaras</option>
								</select>
							</div>							
						</div>
						<div class="field">
							<div class="select">
								<select>
									<option>Ciudad</option>
									<option>Camaras</option>
								</select>
							</div>
							<div class="select last">
								<select>
									<option>Zona</option>
									<option>Camaras</option>
								</select>		
							</div>					
						</div>
						<input type="submit" value="Enviar">
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<?php get_footer(); ?>