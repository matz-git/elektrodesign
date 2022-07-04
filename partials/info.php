<div class="content-wrapper" id="content_start">
    <div class="content">
    
        <span class="anchor" id="uber-uns"></span>
        <h2 class="content-head is-center"><?php if(get_field('first-headline')) the_field('first-headline'); ?></h2>
        <div class="info">
            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <div class="pure-g">
                        <div class="pure-u-6-24 pure-u-md-1-4 pure-u-lg-1-5">
                            <img src="<?php if(get_field('sicherung-bild')) the_field('sicherung-bild'); ?>" class="info-icon" alt="Sicherung-Icon">
                        </div>
                        <div class=" pure-u-18-24 pure-u-md-3-4 pure-u-lg-4-5">
                            <h3 class="content-subhead"><?php the_field('sicherung'); ?></h3>
                            <p><?php if(get_field('sicherung-text')) the_field('sicherung-text'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <div class="pure-g">
                        <div class=" pure-u-6-24 pure-u-md-1-4 pure-u-lg-1-5">
                            <img src="<?php if(get_field('dokumentation-bild')) the_field('dokumentation-bild'); ?>" class="info-icon" alt="Dokumentation-Icon">
                        </div>
                        <div class=" pure-u-18-24 pure-u-md-3-4 pure-u-lg-4-5">
                            <h3 class="content-subhead"><?php the_field('dokumentation'); ?></h3>
                            <p><?php if(get_field('dokumentation-text')) the_field('dokumentation-text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <div class="pure-g">
                        <div class=" pure-u-6-24 pure-u-md-1-4 pure-u-lg-1-5">
                            <img src="<?php if(get_field('sicherung-bild')) the_field('kennzeichnung-bild'); ?>" class="info-icon" alt="Kennzeichnung-Icon">
                        </div>
                        <div class=" pure-u-18-24 pure-u-md-3-4 pure-u-lg-4-5">
                            <h3 class="content-subhead"><?php the_field('kennzeichnung'); ?></h3>
                            <p><?php if(get_field('kennzeichnung-text')) the_field('kennzeichnung-text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <div class="pure-g">
                        <div class=" pure-u-6-24 pure-u-md-1-4 pure-u-lg-1-5">
                            <img src="<?php if(get_field('sicherung-bild')) the_field('markierung-bild'); ?>" class="info-icon" alt="Markierung-Icon">
                        </div>
                        <div class=" pure-u-18-24 pure-u-md-3-4 pure-u-lg-4-5">
                            <h3 class="content-subhead"><?php the_field('markierung'); ?></h3>
                            <p><?php if(get_field('markierung-text')) the_field('markierung-text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>