<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package StrongerGym
 */

get_header();
?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main">

		
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-md-4">
					<img src="" alt="<?php echo get_template_directory_uri().'/img/silueta_entrenador.jpg'?>">

					<i class="fab fa-facebook-square fa-2x"></i>
					<i class="fab fa-twiter-square fa-2x"></i>
					<i class="fab fa-instagram fa-2x"></i>
					<i class="fab fa-youtube-square fa-2x"></i>
				
				</div>
			

				<div class="col-md-8 detalle_entrenador">
					<header class="entry-header">
					
					<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
				    
					</header>
					<?php the_field('biografia');?>

					<h3 class="entry-title"><?php the_field('perfil_del_entrenador');?></h3>
					<span>Nombre:</span> <?php the_field('nombre_y_apellido');?> <br/>
					<span>Edad:</span>
					<?php 
					// get raw date
					 $date = get_field('edad', false, false);
					// make date object
					 $date = new DateTime($date);
					// para mostrarlo en pantalla.
					echo $date->format('j m Y'); 
					
					 ?>
					<br/>
					<span>Email:</span><?php the_field('email');?> <br/>
					<span>Especialidades:</span> <br/>
					<span></span> <br/>
				</div>

			</div>
			
			<div class="row">
		
				<div class="col-md-12">
				<h3 class="entry-title">Habilidades</h3>
					<div class="progress">
					
							<p>Boxeo</p>
							<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">85%</div>
					</div>
					<div class="progress">
							<p>Pesas</p>
							<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>
					<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>
				</div>
			
			</div>
			
	    </article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
