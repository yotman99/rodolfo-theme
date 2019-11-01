<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rodolfo_Rivera 
 * @since 1.0.1
 */
?>

<?php get_header('secondary') ?>

	<header class="page-wrapper no-link__title">
		<div class="categories">
	        <ul class="categories-list">
	            <?php wp_list_categories( array(
	                'orderby'            => 'id',
	                'title_li'           => '',
	                'show_count'         => false,
	                'use_desc_for_title' => false,
	                'child_of'           => 9
	             ) ); ?>
	        </ul>
    	</div>
	<header><!-- .page-header -->

	<section class="container">
		<?php if ( have_posts() ) : ?>
			<div class="row">
				<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content/content', 'content' );

						// End the loop.
					endwhile;

					// Previous/next page navigation.
					rodolfo_rivera_the_posts_navigation();

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content/content', 'none' );

				endif;
				?>
		 	</div>
	</section>	 		
<?php get_footer('secondary') ?>
