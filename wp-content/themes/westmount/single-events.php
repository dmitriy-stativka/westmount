<?php get_header(); 

$build_folder = get_template_directory_uri() . '/assets/';

?>

<?php if ( $video_url = get_field( 'video_url' ) ) :
	 $video_url = get_field( 'video_url' );
 endif; ?>


<section class="single-events">

    <div class="single-event">
        <div class="container">
            <div class="single-event__inner">
                <div class="main-top">
                    <?php if ( $location = get_field( 'location' ) ) : ?>
                        <span class="events-label">
                            <svg width="11" height="11">
                                <use href="<?php
                                echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                            </svg>
                            <?php echo esc_html( $location ); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ( $title = get_field( 'title' ) ) : ?>
                        <h2 class="main-top__title"><?php echo esc_html( $title ); ?></h2>
                    <?php endif; ?>

        
                </div>

                <div class="video-box">
                    <a data-lg-size="1280-720" class="video-box__link"
                       data-src="<?php
					   echo $video_url ?>">

                        <span class="video-box__link-wrapper">
                            <?php
                                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'custom-size');
                                if ($image_url) {
                                    $image_url = $image_url[0]; ?>
                                    <img
                                        width="1240"
                                        height="640"
                                        class="img-responsive"
                                        src="<?php echo $image_url;?>"/>
                                <?php }
                            ?>


                            <span class="video-box__play play-btn">
                                <svg width="22" height="22">
                                    <use href="<?php
                                    echo $build_folder ?>img/sprite/sprite.svg#play"></use>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="event-body">
        <div class="container">
            <div class="event-body__inner">
                <aside class="event-body__aside">
                    <span class="event-body__aside-title">
                        Other events
                    </span>
                    <ul class="event-body__aside-list">
                        <li class="event-body__aside-item">
                            <div class="other-event">
                                <span class="events-label">
                                    <svg width="11" height="11">
                                        <use href="<?php
                                        echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                    </svg>
                                    Our Company
                                </span>

                                <div class="other-event__image">
                                    <img width="154" height="89" src="<?php
	                                echo $build_folder ?>/img/new/events.png" alt="">
                                </div>

                                <div class="other-event__bottom">
                                    <span class="other-event__name">
                                        "Great Gatsby"
                                    </span>
                                     <span class="other-event__date">
                                        18 Oct. 2018
                                    </span>
                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
			                                echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </li>
                        <li class="event-body__aside-item">
                            <div class="other-event">
                                <span class="events-label">
                                    <svg width="11" height="11">
                                        <use href="<?php
                                        echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                    </svg>
                                    Our Company
                                </span>

                                <div class="other-event__image">
                                    <img width="154" height="89" src="<?php
				                    echo $build_folder ?>/img/new/events.png" alt="">
                                </div>

                                <div class="other-event__bottom">
                                    <span class="other-event__name">
                                        "Great Gatsby"
                                    </span>
                                    <span class="other-event__date">
                                        18 Oct. 2018
                                    </span>
                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
						                    echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </aside>

                <div class="event-body__box">
                   
                    <?php 
                        $acf_date = get_field('date');
                        $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                        $formatted_date = $date->format('d') . ' <i> ' . $date->format('F Y') . '</i>';

                        echo '<div class="event-body__date">' . $formatted_date . '</div>';
                    ?>



                    <div class="event-body__image">
                        <img src="<?php echo $build_folder ?>img/word.png" alt="" class="bg-word">
                        <span class="event-body__name"><?php the_title();?></span>
                        <img width="715" height="278" src="<?php
	                    echo $build_folder ?>img/new/events.png" alt="">
                    </div>

                    <div class="event-body__bottom">
                        <span>Share:</span>
                        <ul class="event-body__bottom-list">
                            <li class="event-body__bottom-item">
                                <a href="#" class="border-link">
                                    <img width="15" height="15" src="<?php
	                                echo $build_folder ?>/img/LinkedIn.svg" alt="">
                                </a>
                            </li>
                            <li class="event-body__bottom-item">
                                <a href="#" class="border-link">
                                    <img width="15" height="15" src="<?php
			                        echo $build_folder ?>/img/xxx.svg" alt="">
                                </a>
                            </li>
                            <li class="event-body__bottom-item">
                                <a href="#" class="border-link">
                                    <img width="15" height="15" src="<?php
			                        echo $build_folder ?>/img/fb.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="events-box">
        <div class="events-box__bg">
            <img src="<?php
			echo $build_folder ?>img/new/single_event_bg.png" alt="">
        </div>
        <div class="container">
            <div class="events-box__inner">
                <div class="main-top">
                    <h2 class="main-top__title">More Events</h2>
                </div>

                <ul class="events-box__list">
                    <li class="events-box__item">
                        <div class="event-card">
                            <div class="event-card__coll">
                            <span class="event-card__date">
                                18
                                <i>Oct. 2018</i>
                            </span>
                                <div class="event-card__image">
                                    <img width="445" height="256" src="<?php
									echo $build_folder ?>/img/new/event.png" alt="">
                                </div>
                            </div>

                            <div class="event-card__info">
                            <span class="event-card__title">
                                "Great Gatsby"
                            </span>

                                <div class="event-card__bottom">
                                 <span class="events-label">
                                    <svg width="11" height="11">
                                        <use href="<?php
                                        echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                    </svg>
                                    Location – THE BROADVIEW HOTEL
                                </span>

                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
											echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="events-box__item">
                        <div class="event-card">
                            <div class="event-card__coll">
                            <span class="event-card__date">
                                18
                                <i>Oct. 2018</i>
                            </span>
                                <div class="event-card__image">
                                    <img width="445" height="256" src="<?php
									echo $build_folder ?>/img/new/event2.png" alt="">
                                </div>
                            </div>

                            <div class="event-card__info">
                            <span class="event-card__title">
                                "Grown in the Dark"
                            </span>

                                <div class="event-card__bottom">
                                 <span class="events-label">
                                    <svg width="11" height="11">
                                        <use href="<?php
                                        echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                    </svg>
                                    Location – DISTRICT 28
                                </span>

                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
											echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>

                <a href="/company/" class="action_btn events-box__btn">
                    <div class="action_btn_text">
                        All Events
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
    </div>
</section>

<?php get_footer();?>