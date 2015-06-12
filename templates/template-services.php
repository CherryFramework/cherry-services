<?php
/**
 * Template Name: Services Page
 *
 * The template for displaying CPT Services.
 *
 * @package Cherry_Services
 * @since   1.0.0
 */

if ( have_posts() ) :

	while ( have_posts() ) :

			the_post(); ?>

			<article <?php cherry_attr( 'post', 'services-template' ); ?>>

				<?php

					// Display a page content.
					the_content();

					$args = array(
						'template'     => 'image-box.tmpl',
						'before_title' => '<h3 class="cherry-services_title">',
						'after_title'  => '</h3>',
						'container'    => false,
						'size'         => 'cherry-thumb-s',
						'col_xs'       => '12',
						'col_sm'       => '6',
						'col_md'       => '4',
						'col_lg'       => 'none',
						'pager'        => true,
						'limit'        => Cherry_Services_Templater::$posts_per_archive_page
					);
					$data = new Cherry_Services_Data;
					$data->the_services( $args );
				?>

			</article>

	<?php endwhile;

endif; ?>