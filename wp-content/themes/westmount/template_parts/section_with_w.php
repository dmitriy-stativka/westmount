
<?php if(!get_field('hide_block', $page_id)): ?>

<?php
  $bg_image = get_sub_field('background_image');
  $color_bg1 = get_sub_field('background_color_1');
  $color_bg2 = get_sub_field('background_color_2');

  $title = get_sub_field('title');
  $left_sub_title = get_sub_field('left_sub_title');
  $right_sub_title = get_sub_field('right_sub_title');
  $middle_sub_title = get_sub_field('middle_sub_title');

  $text_above_w = get_sub_field('text_above_w');
  $w_image = get_sub_field('w_image');
  
  $left_bottom_text = get_sub_field('left_bottom_text');
  $right_bottom_text = get_sub_field('right_bottom_text');

?>  

  <section class="section_company_w"
            style="background: radial-gradient(59.53% 53.31% at 78.15% 42.3%, <?php echo $color_bg1; ?> 15.62%, <?php echo $color_bg2; ?> 100%);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;"
            >
    <div 
      class="section_company_w_bg_image"
      style="background-image: url(<?php echo $bg_image['sizes']['1440']; ?>);
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;"
    ></div>
    <div 
      class="section_company_w_image"
      style="background-image: url(<?php echo $w_image['sizes']['1440']; ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;"
    ></div>
      <div class="container">
        <div class="section_top_title">
          <div class="sub_title">
            <div class="octagon-icon"></div>
            <?php echo $left_sub_title; ?>
          </div>
        </div>

        <div class="section_title_wrap">

          <div class="section_title" data-subtitle="<?php echo $middle_sub_title; ?>">
            <?php echo $title ?>
          </div>
          <div class="middle_sub_title">
              <span class="middle_sub_title-hidden">
                   <?php echo $middle_sub_title; ?>
              </span>

            <div class="text_above_w">
              <?php echo $text_above_w; ?>
            </div>
          </div>
          <div class="sub_title right_sub_title">
            <div class="octagon-icon"></div>
            <?php echo $right_sub_title; ?>
          </div>
        </div>
    
     

        <div class="section_company_w_text_wrap">
          <div class="section_company_w_text_l">
          <?php echo $left_bottom_text; ?>
          </div>
          <div class="section_company_w_r">
            <?php echo $right_bottom_text; ?>
          </div>
<!--          <div class="section_company_null">-->
<!--          </div>-->
        </div>
        
        

      </div>
  </section>
  
<?php endif; ?>