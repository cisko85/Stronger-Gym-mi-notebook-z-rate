<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package StrongerGym
 */

if ( ! function_exists( 'strongergym_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function strongergym_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'strongergym' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on"><i class="far fa-calendar-alt mr-1"> </i>' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'strongergym_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function strongergym_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'strongergym' ),
			'	<i class="fas fa-user"></i>
			<span class="author vcard">
		
			<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'strongergym_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function strongergym_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			// $categories_list = get_the_category_list( esc_html__( ', ', 'strongergym' ) );
			// if ( $categories_list ) {
			// 	/* translators: 1: list of categories. */
			// 	printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'strongergym' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			// }

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'strongergym' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<i class="fas fa-tags mt-2"></i> <span class="tags-links">' . esc_html__( 'Tagged %1$s', 'strongergym' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'strongergym' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'strongergym' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'strongergym_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function strongergym_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail('blog-single', array( 'class'=>'rounded')); //acá puse el tamaño que configure en funtions.php-->add_image_size( 'blog-single', 750, 500 , true); y le agrege la clase bootstrap rounded.
		?> 
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<div class="container_img_index"><!--contenerdor para agregar texto dentro de la imagen-->
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'medium_size_w: The medium size width', array(//acá puse el tamaño que quiero que sea el post-thumbail"miniatura o imagen destacada que setie en el archivo tamplate-tags.php
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
				'class' => 'rounded'//agregar clase  css rounded de bootstrap para redondear imagen
			) );
			?>
		</a>
		<div class="text-block-img ">
		
		<?php
		
		/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'strongergym' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( ' %1$s', 'strongergym' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
        ?>
		</div>
		</div><!-- container-img-index -->

		<?php
		endif; // End is_singular().
	}
endif;
