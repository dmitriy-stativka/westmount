<?php if(!get_sub_field('hide_block', $page_id)): ?>
  <?php 
    $bg_image       = get_sub_field('background_image'); 
    $title          = get_sub_field('title');
    $sub_title      = get_sub_field('sub_title'); 
    $image_video_bg = get_sub_field( 'image_video_bg' );
    $video_bg       = get_sub_field( 'video_bg' );
  ?>  




<section class="section_home_company">
    <?php if ( $image_video_bg ) : ?>
      <div class="section_home_company_video">
        <video autoplay loop muted src="<?php echo $video_bg; ?>"></video>
      </div>
    <?php else: ?>
      <div class="section_home_company_image">
        <img src="<?php echo $bg_image['sizes']['1440']; ?>" alt="">
      </div>
    <?php endif; ?>
    
    <div class="container">
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