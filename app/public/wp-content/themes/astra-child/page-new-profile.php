<?php

//Template Name: User Profile


//include everything to submit a form
acf_form_head();

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

	<article
<?php
		echo astra_attr(
			'article-page',
			array(
				'id'    => 'post-' . get_the_id(),
				'class' => join( ' ', get_post_class() ),
			)
		);
		?>
>
	<?php astra_entry_top(); ?>
	<header class="entry-header <?php astra_entry_header_class(); ?>">
		<?php astra_get_post_thumbnail(); ?>

		<?php
		astra_the_title(
			'<h1 class="entry-title" ' . astra_attr(
				'article-title-content-page',
				array(
					'class' => '',
				)
			) . '>',
			'</h1>'
		);
		?>
	</header><!-- .entry-header -->

	<div class="entry-content clear" 
		<?php
				echo astra_attr(
					'article-entry-content-page',
					array(
						'class' => '',
					)
				);
				?>
	>
		<?php 
			//add a form 
			acf_form( array( 'post_id' => 'new_post',
				'post_title' => true,
				'post_content' => true,
				'new_post' => array(
					'post_type' => 'post',
					'post_status' => 'draft',
					'post_category' => array( 1 ),
				),
			));
		?>

			</div>
			</article>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
