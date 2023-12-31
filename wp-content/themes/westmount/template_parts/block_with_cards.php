<?php if(!get_sub_field('hide_block', $page_id)): ?>
  <?php $bg_image = get_sub_field('background_image'); ?> 

  <section class="section_home_cards"
  style="background-image: url(<?php echo $bg_image['sizes']['1440']; ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
    <div class="container">
      <div class="section_top_title">
        <?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
          <div class="sub_title">
            <div class="octagon-icon"></div>
            <?php echo $sub_title; ?>
          </div>
        <?php endif; ?>
      </div>

      <?php if ( $title = get_sub_field( 'title' ) ) : ?>
        <div class="section_title section_title_max_w"><?php echo $title; ?></div>
      <?php endif; ?>

      <?php if ( $under_title = get_sub_field( 'under_title' ) ) : ?>
        <div class="section_sub_title"><?php echo $under_title; ?></div>
      <?php endif; ?>

      <?php if( have_rows('card') ): ?>
        <div class="section_home_cards_wrap">
            <?php while(have_rows('card')): the_row(); ?>

          <?php if(!get_sub_field('hide_card')): ?> 
          
          <div class="section_home_card_item">
            <div class="section_home_card_item_wrap">
              <div class="section_home_card_item_bg"
                    style="background-image: url(<?php echo get_sub_field('card_background_image')['sizes']['1440']; ?>);
                      background-position: 0 0;
                      background-repeat: no-repeat;
                      background-size: cover;">
              </div>
              <div class="section_home_card_item_small_image">
                <img src="<?php echo get_sub_field('card_icon')['sizes']['1440']; ?>" alt="icon" />
              </div>
              <div class="card_text">
                <?php echo get_sub_field('card_text_block'); ?>
              </div>
              <div class="corner"></div>
            </div>
          </div>

          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php
        $link = get_sub_field( 'action_button' );
        if ( $link ) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>

          <a class="action_btn mt_action_btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <div class="action_btn_text"><?php echo esc_html( $link_title ); ?></div>
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