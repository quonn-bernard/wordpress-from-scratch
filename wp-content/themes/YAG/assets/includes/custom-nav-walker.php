<?php
class YAG_Custom_Nav_Walker extends Walker_Nav_Menu{
    public function start_lvl( &$output, $depth = 0, $args = [] ){
        $output         .= '<ul class="main-menu">';
    }
    
    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ){
        $output         .= '<li>';
        $output         .= $args->before;
        $output         .='<a href="' .$item->url . '">';
        $output         .='<span class="flaticon-layers">';
        $output         .='</span>';
        $output         .=$args->link_before . $item->title . $args->link_after;
        $output         .= '</a>';
        $output         .= $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0){
        $output         .= '</li>';
    }

    public function end_lvl( &$output, $depth = 0, $args = [] ){
        $output         .= '<ul class="main-menu">';
    }
    }