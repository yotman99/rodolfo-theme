<?php
/**
 * Template name: Blog
 */

get_header();
?>
<style type="text/css">
    body{
            background-image: url("<?php echo get_template_directory_uri() . '/assets/img/bg.svg'?>");
        }
</style>
<main class="page-container">
    <h1 class="title"><?php single_post_title(); ?></h1>
    <div class="categories">
        <ul class="categories-list">
            <?php wp_list_categories( array(
                'orderby'            => 'id',
                'title_li'           => '',
                'show_count'         => false,
                'use_desc_for_title' => false,
                'child_of'           => 10
             ) ); ?>
        </ul>
    </div>
<section class="container">
    <div class="row">
        <?php

            $portfolioPosts = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Portafolio',
             ));

            while ($portfolioPosts->have_posts()) {
         
                $portfolioPosts->the_post();

                get_template_part( 'template-parts/content/content', 'content' );
                rodolfo_rivera_the_posts_navigation();
             }

                wp_reset_postdata();
            ?>
    </div>
</section>
</main>

<?php get_footer('secondary') ?>