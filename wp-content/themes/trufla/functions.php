<?php
    // register menus to the theme
    register_nav_menus( array('primary-menu' => 'Primary Menu') );
    register_nav_menus( array('secondary-menu' => 'Secondary Menu') );
    register_nav_menus( array('resources-menu' => 'Resources Menu') );



    // custom walker for the main nav
    class custom_description_link_trufla extends Walker_Nav_Menu {

            function start_lvl(&$output, $depth = 0, $args = array()) {
                if($depth >= 0) {
                    $output .=  '';
                } else {
                    $output .= "<ul class='sub-menu'>";
                }
            }


            function end_lvl(&$output, $depth = 0, $args = array()) {
                if($depth >= 0) {
                    $output .=  '';
                } else {
                    $output .= "</ul>";
                }
            }


            function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
            {
                $attributes  = '';


                ! empty( $item->attr_title )
                and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
                ! empty( $item->target )
                and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
                ! empty( $item->xfn )
                and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
                ! empty( $item->url )
                and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';

                $title = apply_filters( 'the_title', $item->title, $item->ID );

                if($depth >= 1) {
                    $output .=  "by <a class='designer-name' " . $attributes . ">" . $title . "</a>";
                } else {
                    $output .= "<li><a class='design-name' " . $attributes . ">" . $title . "</a>";
                }
            }


            function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
            {
                if($depth >= 1) {
                    $output .=  '</li>';
                } else {
                    $output .= "";
                }
            }

        }



    // Enqueue scripts and styles.
    function trufla_task_styles() {

        wp_enqueue_style( 'trufla-custom-style', get_template_directory_uri() . '/assets/css/214.css' );

    }
    add_action( 'wp_enqueue_scripts', 'trufla_task_styles', false);


    function trufla_custom_header_setup() {
        $defaults = array(
            'default-image'         => false,
            'header-text'           => true,
        );
    }
    add_action( 'after_setup_theme', 'trufla_custom_header_setup' );
