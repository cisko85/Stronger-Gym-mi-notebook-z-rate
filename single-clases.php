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
			<?php the_title( '<h1> </h1>') ?>

            <!-- carousel bootstrap -->
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/img/silueta_entrenador.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/img/galeria2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
             </div>
			<!-- fin carousel bootstrap -->
	    </article>
		<br>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
