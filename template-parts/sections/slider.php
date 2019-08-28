<div id="carousel-slider" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

        <?php

            $sb_slidecount = 0;

            // WP Query 
            $args = get_query_var('sb_slider_args');

            $sb_slider_query = new WP_Query( $args ); 

            // WP Loop
            while ( $sb_slider_query->have_posts() ) :
                $sb_slider_query->the_post(); 

                $sb_slidecount++; 
        
        ?>

        <div class="carousel-item <?php if($sb_slidecount == 1){echo 'active';} ?>">

            <img class="d-block w-100" src="<?php the_post_thumbnail_url('sb_big'); ?>" alt="<?php the_title(); ?>">

            <div class="carousel-caption">
                <h3><?php the_title(); ?></h3>
                <div class="d-none d-md-block"><?php the_excerpt(); ?></div>
                <a class="btn btn-light" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'sb-base-theme'); ?></a>
            </div>

        </div>

        <?php endwhile; 

        // WP Query Reset
        wp_reset_query();
        wp_reset_postdata(); ?>
        
    </div>

    <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>