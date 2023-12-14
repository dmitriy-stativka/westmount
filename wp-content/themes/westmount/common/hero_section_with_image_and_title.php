<?php if(!get_field('hide_block', $page_id)): ?>
  <?php 
    $bg_image = get_sub_field('background_image'); 
    $title = get_sub_field('title');
    $sub_title = get_sub_field('sub_title'); 
  ?>  

<section class="section_home_company"
         style="background-image: url(<?php echo $bg_image['sizes']['1440']; ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;"
            >
            <div class="container_box">
              <div class="section_wrap">
                <div class="title_wrap">
                  <div class="title">
                    <?php echo $title; ?>
                  </div>
                  <div class="line"></div>
                  <div class="sub_title_hero">
                    <?php echo $sub_title; ?>
                  </div>
                </div>
              </div>
            </div>
</section>

<?php endif; ?>