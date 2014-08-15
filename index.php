<?php get_header(); ?>
 
    <div id="blog">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <div class="post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="featuredimage">     
	<?php the_post_thumbnail(); ?>
      </div> 
            <div class="entry">	
		
                <?php the_excerpt(); ?>

               <p class="postmetadata">
                <?php _e('Category under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
<?php the_time('F jS, Y'); ?> <br />
<?php the_tags('Tagged with: ',' • ','<br />'); ?>
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </p>
            </div>

        </div>

<?php endwhile; ?>
         
        <div class="navigation">
        <?php posts_nav_link(); ?>
        </div>
         
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>