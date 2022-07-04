<?php
/**
* Template Name: Page-Clean
*/
?>

<?php the_post(); ?>

<?php get_template_part('partials/header'); ?> 

<?php get_template_part('partials/nav'); ?>

<div class="clean-page-container">
	<div id="page_content" class="gap_to_footer">
		<div class="content impressum">
			<div class="row padding-std">
				<div class="col-md-12 double_right_padding">
                    <a href="<?php echo get_page_link(53); ?>">&lt; Zur&uuml;ck zur &Uuml;bersicht</a>
                    <div class="single-container">
                        	<?php the_content(); ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div>

<?php get_template_part('partials/footer')?>
