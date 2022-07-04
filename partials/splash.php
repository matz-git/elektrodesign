<!-- splash -->
<div class="splash-container" style="background-image: url(<?php if(get_field('header-image')) the_field('header-image'); ?>);">
    <div class="splash">
        <h1 class="splash-head"><?php if(get_field('splash-header')) the_field('splash-header'); ?></h1>
        <p class="splash-subhead">
            <?php if(get_field('splash-subheader')) the_field('splash-subheader'); ?>
        </p>
        <p>
            <!-- <a href="#kontakt" class="pure-button pure-button-primary">kontaktieren</a> -->
        </p>
    </div>
</div>