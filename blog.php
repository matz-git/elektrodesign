<?php
/**
* Template Name: Blog-Page
*/
get_template_part('partials/header');
get_template_part('partials/nav');
?>


<div class="clean-page-container">
	<div id="page_content" class="gap_to_footer">
		<div class="content blog">
			<div class="row padding-std">
				<div class="col-md-12 double_right_padding">
                    <a href="<?php echo esc_url( home_url() ); ?>">&lt; Zur&uuml;ck zur Startseite</a>

                    <?php
                    // set up or arguments for our custom query
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $query_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );
                    // create a new instance of WP_Query
                    $the_query = new WP_Query( $query_args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
                    <article>
                        <h2><a href="<?php echo get_permalink( ); ?>"><?php echo the_title(); ?></a></h2>
                        <div class="excerpt">
                        <?php the_excerpt(); ?>
                        </div>
                        <span>
                            Von <?php the_author() ?> / <?php the_date('d. F Y') ?>
                            / <a href="<?php echo get_permalink(); ?>">Weiterlesen</a>
                        </span>
                    </article>
                    <?php endwhile; ?>

                    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                    <nav class="prev-next-posts">
                        <div class="prev-posts-link">
                        <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
                        </div>
                        <div class="next-posts-link">
                        <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
                        </div>
                    </nav>
                    <?php } ?>

                    <?php else: ?>
                    <article>
                        <h1>Sorry...</h1>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    </article>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div>

<?php get_template_part('partials/footer'); ?>