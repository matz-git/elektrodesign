<div class="">
    <span class="anchor" id="referenzen"></span>
    <h2 class="content-head is-center"><?php if(get_field('second-headline')) the_field('second-headline'); ?></h2>
    <div class="customers is-center">
        <?php $args = array(
            'post_type' => 'referenzen',
            'posts_per_page' => '10'
        ); ?>

        <div class="content">
            <div class="pure-g">
                <?php $products_loop = new WP_Query( $args ); ?>  
                <?php if ( $products_loop->have_posts() ) : ?>  
                    <?php $count = 1; ?>
                    <?php while ( $products_loop->have_posts() ) : $products_loop->the_post();?>

                        <div class="pure-u-lg-1-3 pure-u-md-1-2 pure-u-1-1">
                            <div class="first"><img src="<?php the_field('referenz_bild') ?>" alt="<?php get_the_title(); ?>"></div>
                            <div class="first-p references-infos"><?php the_field('referenz_text') ?>
                                <br><a href="<?php the_field('referenz_link') ?>"><?php the_field('referenz_link') ?></a>
                            </div>
                        </div>
 
                        <?php $count++; ?>  
            
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                <?php endif; ?>
            </div> 
        </div>


<!--Variante mit extra div alle 3. loop-->  
         <!--<div class="content"> 
            <div class="pure-g">
                <?php $products_loop = new WP_Query( $args ); ?>  
                <?php if ( $products_loop->have_posts() ) : ?>  
                    <?php $count = 1; ?>
                    <?php while ( $products_loop->have_posts() ) : $products_loop->the_post();?>

                        <div class="pure-u-1-3"><p>Thirds</p>
                            <a href="#" class="first"><img src="<?php the_field('referenz_bild') ?>" alt="<?php get_the_title(); ?>"></a>
                        </div>

                        <?php if ($count % 3 == 0){ ?>      
                        <div class="first-p references-infos">fsdf</div>
                        <?php } ?> 
                        <?php $count++; ?>  
                    
            
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                <?php endif; ?>
            </div>
        </div>-->

    </div>
</div>


