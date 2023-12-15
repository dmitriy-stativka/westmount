<?php if(!get_field('hide', $page_id)): ?>
  <?php 
    $title = get_sub_field('title'); 
    $sub_title = get_sub_field('sub_title'); 
    $bg_image = get_sub_field('background_image'); 
    $figure_image = get_sub_field('figure_image'); 
    $height_of_figure_image = get_sub_field('height_of_figure_image'); 
  ?>  
  
  <section class="section_home_team"
          style="background-image: url(<?php echo $bg_image['sizes']['1440']; ?>);
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;">
    <div class="container">
      <div class="section_top_title">
        <div class="sub_title">
          <div class="octagon-icon"></div>
          <?php echo $sub_title; ?>
        </div>
      </div>
      <div class="section_home_team_title"><?php echo $title; ?></div>
      <div class="section_home_team_bg"
          style="background-image: url(<?php echo $figure_image['sizes']['1440']; ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: <?php echo get_sub_field('height_of_figure_image'); ?>px"
            >
        <div class="corner corner_l"></div>
        <div class="corner corner_r"></div>
      </div>
        <?php $action_button = get_sub_field('action_button'); ?>
        <?php if( $action_button ): 

          $action_button_url = $action_button['url'];
          $action_button_title = $action_button['title'];
          $action_button_target = $action_button['target'] ? $action_button['target'] : '_self';

        ?>
        <a href="<?php echo $action_button_url; ?>" class="action_btn">
          <div class="action_btn_text">
            <?php echo $action_button_title; ?>
          </div>
          <div class="square">
          <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.2816 0L8.16406 1.11753L11.7299 4.7341V6.30379L8.16406 9.93256L9.23086 11L13.3375 6.89403V4.05588L9.2816 0Z" fill="#F9FAFE"/>
            <path d="M9.86962 4.73438H0V6.30406H9.86962V4.73438Z" fill="#F9FAFE"/>
          </svg>
          </div>
        </a>
        <?php endif; ?>
    </div>
  </section>

<?php endif; ?>