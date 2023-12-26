<?php if(!get_sub_field('hide', $page_id)): ?>
<?php  $bg_image = get_sub_field('background_image'); ?>

<section class="section_home_solutions"
        style="background-image: url(<?php echo $bg_image['sizes']['1440']; ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
      <div class="container">
        <div class="section_top_title">
          <div class="sub_title">
            <div class="octagon-icon"></div>
            <?php echo get_sub_field('sub_title'); ?>
          </div>
        </div>
        <div class="solutions_controls_wrap">
          <div class="section_title">Solutions</div>
          <div class="controls">
            <div class="solutions_slider_controls">
              <div class="button_slider btn_prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="63" viewBox="0 0 61 63" fill="none">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M13.3313 0.882812H60.5V62.8828H0V14.2141L13.3313 0.882812Z"
                    fill="transparent"
                    stroke="black"
                  />
                  <path
                    d="M27.7184 26.8828L28.8359 28.0003L25.2701 31.6169V33.1866L28.8359 36.8154L27.7691 37.8828L23.6625 33.7768V30.9387L27.7184 26.8828Z"
                    fill="black"
                  />
                  <path d="M27.1304 31.6172H37V33.1869H27.1304V31.6172Z" fill="black" />
                </svg>
              </div>
              <div class="button_slider btn_next">
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="63" viewBox="0 0 61 63" fill="none">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M13.3313 0.882812H60.5V62.8828H0V14.2141L13.3313 0.882812Z"
                    fill="transparent"
                    stroke="black"
                  />
                  <path
                    d="M27.7184 26.8828L28.8359 28.0003L25.2701 31.6169V33.1866L28.8359 36.8154L27.7691 37.8828L23.6625 33.7768V30.9387L27.7184 26.8828Z"
                    fill="black"
                  />
                  <path d="M27.1304 31.6172H37V33.1869H27.1304V31.6172Z" fill="black" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="solutions_swiper_container swiper">
          <div class="swiper-wrapper">

        <?php while(have_rows('slide')): the_row(); ?>
            <?php if(!get_sub_field('hide_slide')): ?> 

            <div class="swiper_item swiper-slide">
              <div class="swiper_item_block">
                <div class="swiper_item_title">
                  <?php echo get_sub_field('title'); ?>
                </div>

                <?php $link = get_sub_field('link'); ?>
                <?php if( $link ): 

                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';

                ?>
                  <a href="<?php echo esc_url( $link_url ); ?>" 
                          class="swiper_item_link"  
                          target="<?php echo esc_attr( $link_target ); ?>">
                          <?php echo esc_html( $link_title ); ?>
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                      <path
                        d="M10.1546 0.882812L9.03711 2.00035L12.6029 5.61692V7.1866L9.03711 10.8154L10.1039 11.8828L14.2105 7.77684V4.93869L10.1546 0.882812Z"
                        fill="white"
                      />
                      <path d="M10.7407 5.61719H0.871094V7.18687H10.7407V5.61719Z" fill="white" />
                    </svg>
                  </i>
                </a>
                
                <?php endif; ?>

              </div>
            </div>
            <?php endif; ?>
          <?php endwhile; ?>
            </div> 
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>