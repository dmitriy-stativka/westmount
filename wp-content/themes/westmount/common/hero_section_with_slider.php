<?php if(!get_field('hide', $page_id)): ?>
  
  <?php if( have_rows('slider') ): ?>
    <section class="section_hero_slider">
      <div class="swiper-container swiper">
        <div class="swiper-wrapper">
          
            <?php while(have_rows('slider')): the_row(); 
                $slide = get_sub_field('slide');
                $title = $slide['title'];
                $color_bg1 = $slide['color_background_start'];
                $color_bg2 = $slide['color_background_end'];
                $img1 = $slide['background_image_top'];
                $img2 = $slide['background_image_bottom'];
        
              ?>

                <?php if(!get_sub_field('hide_slide', $page_id)): ?> 

                  <div div class="swiper-slide">
                    <div class="gradient_bg" style="background: linear-gradient(180deg, <?php echo $color_bg1; ?> 0%, <?php echo $color_bg2; ?> 100%);">
                      <?php if($img1): ?> 
                        <div class="hero_bg_logo">
                          <img src="<?php echo $img1['sizes']['1440']; ?>" alt="hero_bg_logo" loading="lazy" />
                        </div>
                      <?php endif; ?>
                      <?php if($img2): ?> 
                        <div class="hero_bg_building">
                          <img src="<?php echo $img2['sizes']['1440']; ?>" alt="background_image_bottom" loading="lazy" />
                        </div>
                      <?php endif; ?>
                      <div class="container_box">
                        <div class="h2hero_wrap">
                          <div class="h2hero_bottom_wrap">
                            <div class="h2hero_bottom_menu_wrap">
                              <div class="h2hero_overflow">

                                <?php if($title): ?> 

                                  <h2 class="h2hero">
                                    <span class="quot_left">"</span>
                                      &nbsp;&nbsp;<?php echo $title; ?>
                                    <span class="quot_right">"</span>
                                  </h2>

                                <?php endif; ?>

                              </div>
                            </div>
                            <div class="h2hero_bottom_line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
             

                <?php endif; ?>
              <?php endwhile; ?>

        </div>
      </div>
      <div class="slider_controls">
        <button class="button_slider btn_prev" tabindex="0" role="button" aria-label="Prev slide" >
          <svg xmlns="http://www.w3.org/2000/svg" width="61" height="63" viewBox="0 0 61 63" fill="none">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M13.3313 0.882812H60.5V62.8828H0V14.2141L13.3313 0.882812Z"
              fill="white"
              stroke="white"
            />
            <path
              d="M27.7184 26.8828L28.8359 28.0003L25.2701 31.6169V33.1866L28.8359 36.8154L27.7691 37.8828L23.6625 33.7768V30.9387L27.7184 26.8828Z"
              fill="black"
            />
            <path d="M27.1304 31.6172H37V33.1869H27.1304V31.6172Z" fill="black" />
          </svg>
        </button>
        <button class="button_slider btn_next" tabindex="-1" role="button" aria-label="Previous slide">
          <svg xmlns="http://www.w3.org/2000/svg" width="61" height="63" viewBox="0 0 61 63" fill="none">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M13.3313 0.882812H60.5V62.8828H0V14.2141L13.3313 0.882812Z"
              fill="white"
              stroke="white"
            />
            <path
              d="M27.7184 26.8828L28.8359 28.0003L25.2701 31.6169V33.1866L28.8359 36.8154L27.7691 37.8828L23.6625 33.7768V30.9387L27.7184 26.8828Z"
              fill="black"
            />
            <path d="M27.1304 31.6172H37V33.1869H27.1304V31.6172Z" fill="black" />
          </svg>
        </button>
      </div>
    </section>

  <?php endif; ?>
<?php endif; ?>