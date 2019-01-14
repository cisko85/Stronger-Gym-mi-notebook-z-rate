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
                    <?php if (has_post_thumbnail()){?>
				
					<?php
					the_post_thumbnail('entrenador-perfil',['class'=>'rounded'])
					?>		

					<div class="enlaces_sociales">
					<?php if (get_field('facebook')){?>
					   <a href="<?php the_field('facebook');?>" target="_blank"><i class="fab fa-facebook-square fa-2x"></i> </a>
					<?php } ?>

					<?php if (get_field('twiter')){?>
					<a href="<?php the_field('twiter');?>" target="_blank"><i class="fab fa-twitter-square fa-2x"></i> </a>
					<?php } ?>


					<?php if (get_field('instagram')){?>
					<a href="<?php the_field('instagram');?>" target="_blank"><i class="fab fa-instagram fa-2x"></i> </a>
					<?php } ?>

					<?php if (get_field('youtube')){?>
					<a href="<?php the_field('youtube');?>" target="_blank"><i class="fab fa-youtube-square fa-2x"></i> </a>
					<?php } ?>
					</div><!--enlaces sociales-->
				</div>
                <?php }?>
			

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
					<?php if (get_field('email')){?>
					<span>Email:</span><?php the_field('email');?> 
					<?php } ?>
					<br/>
					
					<span>Especialidades:</span>
						<?php
						$terms=get_terms('especialidad');//especialidad es una taxonomía
						if(!empty($terms) && ! is_wp_error($terms)){
							
							foreach ($terms as $term) {
								echo $term->name. ', ';
							
							}
							
						}
						?>
					<br/>
					 
				</div>

			</div>
			<br>
			<div class="row">
		
				<div class="col-md-12">
					<h3 class="entry-title">Habilidades</h3>
				    <h5>Enseñanza</h5>
					<div class="progress" >
				
							<div class="progress-bar" role="progressbar" style="width: 85%; background-color: #ffd200;color:#232323;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">85%</div>
					</div> <br>

					<h5>Pesas</h5>
					<div class="progress">
							
							<div class="progress-bar" role="progressbar" style="width: 75% ; background-color: #ffd200 ;color:#232323;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div> <br>

					<h5>Boxeo</h5>
					<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 75% ; background-color:#ffd200;color:#232323;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>
				</div>
			
			</div>
			<br>

			<div class="row">
		
		<div class="col-md-12">
			<h3 class="entry-title">  <?php the_field('titulo_galeria_entrenador');?>  </h3>
		</div>	

					<div class="row">
					
					
						<div class="col-md-4 contenedor_galery">

							<?php
									
									$image = get_field('imagen_#1');
									$thumb = $image['sizes'][ 'entrenador-galery' ];
								
									$alt = $image['alt'];
									
									if( !empty($image) ):
										
							?>
								

								<img src="<?php echo $thumb ; ?>" alt="<?php echo $alt; ?>">
								    
								    <?php endif;?>

						</div>
									
						<div class="col-md-4 contenedor_galery">
							<?php
										
										$image2 = get_field('imagen_#2');
										$thumb2 = $image2['sizes'][ 'entrenador-galery' ];
									
										$alt2 = $image2['alt'];
										
										if( !empty($image2) ):
											
								?>
									

									<img src="<?php echo $thumb2; ?>" alt="<?php echo $alt2; ?>">
										
										<?php endif;?>

						</div>
															
													
						<div class="col-md-4 contenedor_galery">
						<?php
										
										$image3 = get_field('imagen_#3');
										$thumb3 = $image3['sizes'][ 'entrenador-galery' ];
									
										$alt3 = $image3['alt'];
										
										if( !empty($image3) ):
											
								?>
									

									<img src="<?php echo $thumb3; ?>" alt="<?php echo $alt3; ?>">
										
										<?php endif;?>

						</div>
						
					</div> 
			
	    </article>
		<br>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
