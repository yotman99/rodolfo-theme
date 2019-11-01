<?php
/**
 * Template name: Sobre Mi
 */

get_header();

?>
<section class="page-wrapper">
	<h1 class="title"><?php single_post_title(); ?></h1>
	<div class="content-area">
		<?php
	        if(have_posts()){
	           	while (have_posts()) {
	            	the_post();
	            	the_content();
	            }
	        }
	    ?>
	</div>
	<!-- Slider main container -->
	<div class="swiper-container">
	    <!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	        <!-- Slides -->
	        <?php 

	        	 $sliderPosts = new WP_Query(array(
                	'posts_per_page' => 3,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Portafolio',
             	));

	        	if($sliderPosts->have_posts()):
	        		while ($sliderPosts->have_posts()): 
	        			$sliderPosts->the_post();
	        			get_template_part( 'template-parts/content/content', 'slider' );
	        		endwhile;	
	        	endif;

	        ?>
	    </div>

	    <!-- If we need navigation buttons -->
	    <div class="swiper-button-prev"></div>
	    <div class="swiper-button-next"></div>
	</div>
</section>

<script type="text/javascript">
	const options = {
		slidesPerView: 3,
		spaceBetween: 30,
		loop:true,
		lazy: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		speed: 300,
		keyboardControl: true,
		autoplayDisableOnInteraction: false,
		loopedSlides: 3, //looped slides should be the same
		grabCursor: true,
		breakpointsInverse: true,
		breakpoints: {
		    // when window width is => 320px
		    320: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    // when window width is => 480px
		    480: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    },
		    // when window width is => 640px
		    880: {
		      slidesPerView: 3,
		      spaceBetween: 30
			}
		}
	}

	const swiper = new Swiper(".swiper-container", options)
</script>
<?php get_footer('secondary') ?>
