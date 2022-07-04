<?php
/**
* Template Name: Impressum
*/
get_template_part('partials/header');
get_template_part('partials/nav');
?>

<div class="clean-page-container">
	<section id="page_content" class="gap_to_footer">
		<div class="content impressum">
			<div class="row padding-std">
				<div class="col-md-12 double_right_padding">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="first-link">< Zur&uuml;ck zur Startseite</a>
                    <?php echo get_the_content() ?>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>

                    <?php if( is_page('AGB')) { ?>
                        <h2 class="downloads"><?php the_field('pdf_ueberschrift'); ?></h2>
                        <?php if (get_field('1_pdf_name')) { ?> 
                            <p> 
                                <img class="pdf-icon" src="<?php the_field("pdf_bild"); ?>" alt="pdf icon">
                                <a target="_blank" href="<?php the_field('1_pdf_datei'); ?>"><?php the_field('1_pdf_name'); ?></a>
                            </p>
                        <?php } ?>    
                        <?php if (get_field('2_pdf_name')) { ?> 
                            <p> 
                                <img class="pdf-icon" src="<?php the_field("pdf_bild"); ?>" alt="pdf icon">
                                <a target="_blank" href="<?php the_field('2_pdf_datei'); ?>"><?php the_field('2_pdf_name'); ?></a>
                            </p>
                        <?php } ?>    
                    <?php } else { ?>
                        <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="https://www.flaticon.com/authors/zurb" title="Zurb">Zurb</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>               
                        <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <?php } ?>

                </div>
			</div>
		</div>
	</section>
</div>

<?php get_template_part('partials/footer'); ?>