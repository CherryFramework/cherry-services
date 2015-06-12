<?php
/**
 * The Template for displaying archive CPT Services.
 */
$args = array(
	'template'     => 'image-box.tmpl',
	'before_title' => '<h3 class="cherry-services_title">',
	'after_title'  => '</h3>',
	'container'    => false,
	'size'         => 'cherry-thumb-s',
	'pager'        => true,
	'col_xs'       => '12',
	'col_sm'       => '6',
	'col_md'       => '4',
	'col_lg'       => 'none',
	'limit'        => Cherry_Services_Templater::$posts_per_archive_page
	);
$data = new Cherry_Services_Data;
$data->the_services( $args );