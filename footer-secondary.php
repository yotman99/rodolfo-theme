    <footer class="social-media">
    	<p class="social-media__desc">Estoy en</p>
    	<ul class="social-media__menu">
    		<?php  if ( has_nav_menu( 'social' ) ) : ?>
                <nav class="footer-menu" aria-label="<?php esc_attr_e( 'Footer menu', 'Rodolfo_Rivera' ); ?>">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'social',
                                'menu_class'     => 'social-media__menu',
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>' . rodolfo_rivera_get_icon_svg( 'link' ),
                                'depth'          => 1,
                            )
                        );
                    ?>
                </nav><!-- .footer-navigation -->
            <?php endif;  ?>
    	</ul>
    </footer>
</div>
<script type="text/javascript">
    (function(w, d, undefined){

        'use strict';

        var logo = d.querySelector('.hamburger-menu')
        var menu = d.querySelector('.menu')
        var width = 768
        
        logo.addEventListener('click', function(e){
            e.preventDefault();
            menu.classList.toggle('is-show')
        })

        w.addEventListener('resize', function(){
            if (window.matchMedia("(min-width: 768px)").matches) {
            /* The viewport is at least 400 pixels wide */
                menu.classList.remove('is-show')
            }

        })

    })(window, document)
</script>
<?php wp_footer() ?>
</body>
</html>