<?php if(!get_field('hide_block', $page_id)): ?>
  <?php 
  $bg_image = get_sub_field('background_image'); 
  $sub_title = get_sub_field('sub_title'); 
  $color_bg1 = get_sub_field('background_color_1');
  $color_bg2 = get_sub_field('background_color_2');
  $blue_border = get_sub_field('blue_border');
  ?>  

  <section class="section_home_surety"
            style="
            <?php if(get_sub_field('blue_border') === true): ?>
              border: none;
              border-top: 2px solid #00A9EF;
              border-bottom: 2px solid #00A9EF;
            <?php endif; ?>
            background: radial-gradient(59.53% 53.31% at 78.15% 42.3%, <?php echo $color_bg1; ?> 15.62%, <?php echo $color_bg2; ?> 100%);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: <?php echo get_sub_field('height_block'); ?>px"
            >
          
    <div class="section_home_surety_bg_image"
          style="background-image: url(<?php echo $bg_image['sizes']['1440']; ?>);
            <?php if(get_sub_field('image_width')): ?>
              width:<?php echo get_sub_field('image_width') ?>px;
            <?php endif; ?>
            <?php if(get_sub_field('image_height')): ?>
              height:<?php echo get_sub_field('image_height') ?>px;
            <?php endif; ?>
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            <?php if(get_sub_field('image_styles')): ?>
              <?php echo get_sub_field('image_styles') ?>
            <?php endif; ?>
            "></div>
    <div class="container">
      <div class="height_wrap"
           style="height: <?php echo get_sub_field('height_block')*0.85; ?>px">
        <div class="section_top_title">
          <?php if($sub_title): ?>
            <div class="sub_title">
              <div class="octagon-icon"></div>
              <?php echo $sub_title; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="title_wrap">
          <div class="section_home_surety_title">
            <?php echo get_sub_field('title'); ?>
          </div>

          <?php $action_button = get_sub_field('action_button'); ?>
          <?php if( $action_button ): 

            $action_button_url = $action_button['url'];
            $action_button_title = $action_button['title'];
            $action_button_target = $action_button['target'] ? $action_button['target'] : '_self';

          ?>
          <a href="<?php echo $action_button_url; ?>" class="action_btn mt_action_btn">
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
        </div>
      </div>
      <?php endif; ?>
      
    </div>
  </section>
<?php endif; ?>