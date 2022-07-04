<!-- header -->
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed <?php if (!is_page( 'Startseite' )) echo "menu-scroll" ?>">
        <div class="home-menu-wrapper">
            <a class="pure-menu-heading" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <p>Elektrodesign</p> 
                <p>Reiner Weber</p>
            </a>

            <input id="mobile-nav-button" type="checkbox"/>
                <label for="mobile-nav-button" class="mobile-nav-button">
                    <span>Menu</span>
                </label>

            <div class="message mobile-nav">
                <ul>
                    <li><a href="<?php echo get_page_link(33); ?>" class="pure-menu-link">Impressum</a></li>
                    <li><a href="<?php echo get_page_link(53); ?>" class="pure-menu-link">Blog</a></li>
                </ul>  
            </div>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="<?php echo get_page_link(33); ?>" class="pure-menu-link">Impressum</a></li>
                <li class="pure-menu-item"><a href="<?php echo get_page_link(53); ?>" class="pure-menu-link">Blog</a></li>
            </ul>
        </div>
    </div>
</div>
