    <div class="footer">
        <hr>

        <div class="content">
            <div class="pure-g">
                <div class="pure-u-1 ">
                    <p>&copy; 2022 Reiner Weber Elektrodesign
                        <span class="footer-ph">
                            <img alt="footer phone" src="<?php bloginfo('template_directory'); ?>/assets/img/phone-receiver.svg" />
                            <a href="tel:<?php the_field('telefon') ?>"><?php the_field('telefon', 5) ?></a>
                        </span>
                    </p>
                </div>
            </div> 
        </div>
    </div>

    <a id="up-to-top" class="" href="#" title="Go to top of page"></a>
</div>

<?php wp_footer();?>
</body>
</html>
