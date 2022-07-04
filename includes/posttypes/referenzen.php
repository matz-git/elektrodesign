<?php
//Posttype Coment
function add_post_type_referenzen(){
    register_post_type('referenzen',
        array(
            'labels'=>array(
                'name'=>'Referenzen',
                'singular_name'=>'Referenz',
                'add_new'=>'Referenz hinzufügen',
                'add_new_item'=>'Referenz hinzufügen',
                'edit_item'=>( 'Referenz Bearbeiten' ),
                'all_items'=>'Alle Referenzen',
            ),
            'public'=>true,
            'show_ui'=>true,
            'menu_icon'=>'dashicons-portfolio',
            'supports'=>array(
                'costum_fields',
                'title',
            )
        )
    );
}
//Register
add_action('init','add_post_type_referenzen');
