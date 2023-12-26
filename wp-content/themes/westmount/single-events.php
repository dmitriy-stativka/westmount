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
                                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '1440');
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
            <?php
                $current_post_id = get_the_ID();
                $args = array(
                    'post_type' => 'events',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post__not_in' => array($current_post_id)
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    ?>
                    <aside class="event-body__aside">
                        <span class="event-body__aside-title">
                            Other events
                        </span>
                        <ul class="event-body__aside-list">
                            <?php
                            while ($query->have_posts()) : $query->the_post();
                                ?>
                                <li class="event-body__aside-item">
                                    <div class="other-event">
                                        <span class="events-label">
                                            <svg width="11" height="11">
                                                <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                            </svg>
                                            <?php the_field('location')?>
                                        </span>

                                        <div class="other-event__image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('1440'); ?>
                                            <?php endif; ?>
                                        </div>

                                        <div class="other-event__bottom">
                                            <span class="other-event__name">
                                                <?php the_title(); ?>
                                            </span>

                                            <?php 
                                                $acf_date = get_field('date');
                                                $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                                                $formatted_date = $date->format('d') . ' ' . $date->format('M Y');
                                                echo '<span class="other-event__date">' . $formatted_date . '</span>';
                                            ?>

                                            <a href="<?php the_permalink(); ?>" class="article-link">
                                                <svg width="14" height="11">
                                                    <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </aside>
                <?php endif; ?>


                <div class="event-body__box">
                    <?php 
                        $acf_date = get_field('date');
                        $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                        $formatted_date = $date->format('d') . ' <i> ' . $date->format('F Y') . '</i>';
                        echo '<div class="event-body__date">' . $formatted_date . '</div>';
                    ?>
                    <div class="event-body__image">
                        <img src="<?php echo $build_folder ?>img/word.png" alt="" class="bg-word">
                        
                        <span class="event-body__name"><?php the_field('review');?></span>

                    <?php
                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '1440');
                        
                        if ($image_url) {
                            $image_url = $image_url[0]; ?>
                            <img
                                width="1240"
                                height="640"
                                src="<?php echo $image_url;?>"/>
                        <?php } ?>
                    </div>

                    <div class="event-body__bottom">
                        <span>Share:</span>
                        <?php echo do_shortcode('[addtoany]');?>
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

                <?php
                    $current_post_id = get_the_ID();
                    $event_types = wp_get_post_terms($current_post_id, 'event_type');

                    if ($event_types) {
                        $event_type_id = $event_types[0]->term_id;

                        $args = array(
                            'post_type' => 'events',
                            'posts_per_page' => 2,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'event_type',
                                    'field' => 'id',
                                    'terms' => $event_type_id,
                                ),
                            ),
                            'post__not_in' => array($current_post_id)
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            ?>
                            <ul class="events-box__list">
                                <?php
                                while ($query->have_posts()) : $query->the_post();
                                    ?>
                                    <li class="events-box__item">
                                        <div class="event-card">
                                            <div class="event-card__coll">
                                                <?php 
                                                    $acf_date = get_field('date');
                                                    $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                                                    $formatted_date = $date->format('d') . '<i>' . $date->format('M Y') . '</i>';
                                                    echo '<span class="event-card__date">' . $formatted_date . '</span>';
                                                ?>

                                                <div class="event-card__image">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('1440'); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="event-card__info">
                                                <span class="event-card__title">
                                                    <?php the_title(); ?>
                                                </span>

                                                <div class="event-card__bottom">
                                                    <span class="events-label">
                                                        <svg width="11" height="11">
                                                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                                        </svg>
                                                        <?php the_field('location')?>
                                                    </span>

                                                    <a href="<?php the_permalink(); ?>" class="article-link">
                                                        <svg width="14" height="11">
                                                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        <?php endif;
                    }
                    ?>

                <a href="/events" class="action_btn events-box__btn">
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