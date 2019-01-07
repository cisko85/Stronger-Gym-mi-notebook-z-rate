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
				
				</div>
			

				<div class="col-md-8 detalle_entrenador">
					<header class="entry-header">
					<?php
				
					the_title( '<h1 class="entry-title">', '</h1>' );
				
					?>
				    </header>
					<P> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore voluptatem dolores ipsum libero culpa repudiandae tempora quae, eos nesciunt.
					</P>
					P> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore voluptatem dolores ipsum libero culpa repudiandae tempora quae, eos nesciunt.
					</P>
					<h3 class="entry-title">Perfil del entrenador</h3>
					<span>Nombre:</span> Fulano Fernandez <br/>
					<span>Edad:</span> 30años<br/>
					<span>Email:</span> <br/>
					<span>Especialidades:</span> <br/>
					<span></span> <br/>
				</div>

			</div>

		
	    </article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
