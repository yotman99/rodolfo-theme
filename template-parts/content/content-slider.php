
<article class=" swiper-slide card" id="post-<?php the_ID() ?>">
	<?php
		the_post_thumbnail( 'post-thumbnail', array(
			'alt' => the_title_attribute( array(
				'echo' => false
			)),
		));
		?>
</article><!-- #post-<?php the_ID(); ?> -->