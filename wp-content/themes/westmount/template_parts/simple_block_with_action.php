<?php
if ( ! get_sub_field( 'hide_block', $page_id ) ): ?>
	<?php
	$build_folder   = get_template_directory_uri() . '/assets/';
	$bg_image       = get_sub_field( 'background_image' );
	$sub_title      = get_sub_field( 'sub_title' );
	$color_bg1      = get_sub_field( 'background_color_1' );
	$color_bg2      = get_sub_field( 'background_color_2' );
	$blue_border    = get_sub_field( 'blue_border' );
	$image_video_bg = get_sub_field( 'image_video_bg' );
	$video_bg       = get_sub_field( 'video_bg' );
	?>

    <section class="section_home_surety"
             style="
	         <?php
	         if ( get_sub_field( 'blue_border' ) === true ): ?>
                     border: none;
                     border-top: 2px solid #00A9EF;
                     border-bottom: 2px solid #00A9EF;
	         <?php
	         endif; ?>
                     background-image: radial-gradient(59.53% 53.31% at 78.15% 42.3%, <?php
	         echo $color_bg1; ?> 15.62%, <?php
	         echo $color_bg2; ?> 100%);
                     background-position: center;
                     background-repeat: no-repeat;
                     background-size: cover;
                     min-height: <?php
	         echo get_sub_field( 'height_block' ); ?>px"
    >

		<?php if ( $image_video_bg ) : ?>
			<div class="section_home_surety_bg_video">
				<video autoplay loop muted src="<?php echo $video_bg; ?>"></video>
			</div>
		<?php else: ?>
			<div class="section_home_surety_bg_image">
				<img width="<?php echo get_sub_field('image_width') ?>px;" style="min-height: <?php echo get_sub_field('image_height') ?>px; <?php if ( get_sub_field( 'image_styles' ) ): echo get_sub_field( 'image_styles' ); endif; ?>" src="<?php echo $bg_image['sizes']['1440']; ?>" alt="">
			</div>
		<?php endif; ?>

        <div class="container">
            <div class="height_wrap"
                 style="min-height: <?php
			     echo get_sub_field( 'height_block' ) * 0.85; ?>px">
                <div class="section_top_title">
					<?php
					if ( $sub_title ): ?>
                        <div class="sub_title">
                            <div class="octagon-icon"></div>
							<?php
							echo $sub_title; ?>
                        </div>
					<?php
					endif; ?>
                </div>
                <div class="title_wrap">
                    <div class="section_home_surety_title">
						<?php
						echo get_sub_field( 'title' ); ?>
                    </div>

					<?php
					$action_button = get_sub_field( 'action_button' ); ?>
					<?php
					if ( $action_button ):

					$action_button_url    = $action_button['url'];
					$action_button_title  = $action_button['title'];
					$action_button_target = $action_button['target'] ? $action_button['target'] : '_self';

					?>
                    <a href="<?php
					echo $action_button_url; ?>" class="action_btn mt_action_btn">
                        <div class="action_btn_text">
							<?php
							echo $action_button_title; ?>
                        </div>
                        <div class="square">
                            <svg width="14" height="11">
                                <use href="<?php
								echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
			<?php
			endif; ?>

        </div>
    </section>
<?php
endif; ?>