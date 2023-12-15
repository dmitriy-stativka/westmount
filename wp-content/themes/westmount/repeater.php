<?php

if( have_rows('blocks_repeater', $page_id) ):

    while ( have_rows('blocks_repeater', $page_id) ) : the_row();

        if( get_row_layout() == 'hero_section_with_slider' ):

          include get_template_directory() . '/template_parts/hero_section_with_slider.php';

        endif;

        if( get_row_layout() == 'block_with_4_crossing_images' ):

          include get_template_directory() . '/template_parts/block_with_4_crossing_images.php';

        endif;

        if( get_row_layout() == 'simple_block_with_action' ):

          include get_template_directory() . '/template_parts/simple_block_with_action.php';

        endif;

        if( get_row_layout() == 'block_with_cards' ):

          include get_template_directory() . '/template_parts/block_with_cards.php';

        endif;

        if( get_row_layout() == 'slider_with_many_blocks_in_a_row' ):

          include get_template_directory() . '/template_parts/slider_with_many_blocks_in_a_row.php';

        endif;
        
        if( get_row_layout() == 'block_with_static_figure_image' ):

          include get_template_directory() . '/template_parts/block_with_static_figure_image.php';

        endif;

        if( get_row_layout() == 'hero_section_with_image_and_title' ):

          include get_template_directory() . '/template_parts/hero_section_with_image_and_title.php';

        endif;

        if( get_row_layout() == 'section_with_w' ):

          include get_template_directory() . '/template_parts/section_with_w.php';

        endif;

        // if( get_row_layout() == 'block_service_two' ):

        //   include get_template_directory() . '/common/service_two.php' ;

        // endif;

        // if( get_row_layout() == 'block_service_one' ):

        //   include get_template_directory() . '/common/service_one.php' ;

        // endif;

        // if( get_row_layout() == 'block_contact' ):

        //   include get_template_directory() . '/common/contact.php' ;

        // endif;

        // if( get_row_layout() == 'block_ach' ):

        //   include get_template_directory() . '/common/ach.php' ;

        // endif;

        // if( get_row_layout() == 'block_approach' ):

        //   include get_template_directory() . '/common/approach.php' ;

        // endif;

        // if( get_row_layout() == 'block_mission' ):

        //   include get_template_directory() . '/common/mission.php' ;

        // endif;

        // if( get_row_layout() == 'block_heading' ):

        //   include get_template_directory() . '/common/heading.php' ;

        // endif;

        // if( get_row_layout() == 'block_more' ):

        //   include get_template_directory() . '/common/more.php' ;

        // endif;

        // if( get_row_layout() == 'block_slider_two' ):

        //   include get_template_directory() . '/common/slider_two.php' ;

        // endif;

        // if( get_row_layout() == 'block_slider' ):

        //   include get_template_directory() . '/common/slider.php' ;

        // endif;

        // if( get_row_layout() == 'block_principal' ):

        //   include get_template_directory() . '/common/principal.php' ;

        // endif;

        // if( get_row_layout() == 'block_blog_cards' ):

        //   include get_template_directory() . '/common/blog_cards.php' ;

        // endif;

        // if( get_row_layout() == 'block_team_cards' ):

        //   include get_template_directory() . '/common/team_cards.php' ;

        // endif;

        // if( get_row_layout() == 'block_careers_cards' ):

        //   include get_template_directory() . '/common/careers_cards.php' ;

        // endif;

        // if( get_row_layout() == 'block_project_cards' ):

        //   include get_template_directory() . '/common/project_cards.php' ;

        // endif;

        // if( get_row_layout() == 'block_bg_two' ):

        //   include get_template_directory() . '/common/bg_two.php' ;

        // endif;

        // if( get_row_layout() == 'block_bg_end' ):

        //   include get_template_directory() . '/common/bg_end.php' ;

        // endif;

        // if( get_row_layout() == 'block_bg' ):

        //   include get_template_directory() . '/common/bg.php' ;

        // endif;

        // if( get_row_layout() == 'block_wrap_end' ):

        //   include get_template_directory() . '/common/wrap_end.php' ;

        // endif;

        // if( get_row_layout() == 'block_wrap' ):

        //   include get_template_directory() . '/common/wrap.php' ;

        // endif;

        // if( get_row_layout() == 'block_padding' ):

        //   include get_template_directory() . '/common/padding.php' ;

        // endif;

        // if( get_row_layout() == 'block_about_two' ):

        //   include get_template_directory() . '/common/about_two.php' ;

        // endif;

        // if( get_row_layout() == 'block_about' ):

        //   include get_template_directory() . '/common/about.php' ;

        // endif;

    endwhile;

else :


endif;

?>