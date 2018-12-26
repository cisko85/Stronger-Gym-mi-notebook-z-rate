<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrongerGym
 */

?>
		</div><!--row-->
	</div><!-- #content y container -->

	<footer id="colophon" class="site-footer">
	<div class="container">	
			<div class="row widgets-footer"><!--mis 3 zonas de footer personalizadas-->
				
				<div class="col-md-4">
					<div id="footer-1" class="widget-area">
						<?php dynamic_sidebar('footer-1')?>
					</div>
				</div>

				<div class="col-md-4">
					<div id="footer-2" class="widget-area">
						<?php dynamic_sidebar('footer-2')?>
					</div>
				</div>

				<div class="col-md-4">
				    <div id="footer-3" class="widget-area">
						<?php dynamic_sidebar('footer-3')?>
					</div>
				</div>


			

		</div><!--container-->
		
		<div class="site-info  row ">
					<div class="col-md-12 text-center">
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'strongergym' ), 'strongergym', '<a href="https://www.linkedin.com/in/adri%C3%A1n-francisco-sciarretta-0379a0177/">Francisco Sciarretta</a>' );
						?> </div>
					
				</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
