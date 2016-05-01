<?php get_header(); ?>

 <div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="post">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
               
 
                <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                        <?php the_excerpt(); ?>
                <?php else : ?>
                        <?php the_content('Read More'); ?>
                <?php endif; ?>
 
                <div class="dots"></div>
            </div><!-- post -->

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>	

<?php get_footer(); ?>

