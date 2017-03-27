<?php get_header();?>

<?php while(have_posts() ) : the_post(); ?>

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title"><?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php the_excerpt(); ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php the_author(); ?></a> <?php echo " " .get_the_date(); ?></p>
                </div>
                <hr>
                
            </div>
        </div>
    </div>
<?php endwhile; ?>

 <!-- Pager -->
 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="pager">
                    <li class="next">
                        <?php posts_nav_link('', 'Nuevos','Anteriores'); ?>
                    </li>
                </ul>
 </div>
 </div>
 </div>


 <?php get_footer(); ?>