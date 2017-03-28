<?php if(is_page()) { 
	get_header('page'); 
	} else { get_header(); } wp_head(); ?>

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>

    <hr>


<?php get_footer(); ?>