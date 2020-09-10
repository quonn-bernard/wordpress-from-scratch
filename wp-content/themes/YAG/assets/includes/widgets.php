<?php 

function yag_widgets(){
    register_sidebar([
        'name'          => __( 'Theme SideBar', 'yag'),
        'id'            => 'yag_sidebar' ,
        'description'   => __( 'Sidebar for YAG theme', 'yag'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ]);
}

?>