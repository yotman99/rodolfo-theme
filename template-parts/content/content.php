<div class="col-md-4">
	<a href="<?php echo get_permalink() ?>">
		<article class="card" id="post-<?php the_ID() ?>">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false
				) ),
			) );
			?>
			<div class="card__description">
				<h3 class="card__title"><?php echo get_the_title()?></h3>
				<p class="category"><?php echo get_the_category_list( __( ', ', 'rodolfo_rivera' ) ); ?></p>
			</div>
		</article><!-- #post-<?php the_ID(); ?> -->
    </a>
</div>