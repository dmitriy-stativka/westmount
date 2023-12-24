<?php
    $build_folder = get_template_directory_uri() . '/assets/';
?>
<section class="events-page">
    <div class="events-hero">
        <div class="events-hero__bg" style="">
            <img class="left-bg" src="<?php echo esc_url( get_sub_field( 'image_1' ) ); ?>" alt="">
            <img class="right-bg" src="<?php echo esc_url( get_sub_field( 'image_2' ) ); ?>" alt="">
        </div>
        <div class="container">
            <div class="events-hero__inner">
                <div class="main-top">
                    <?php if ( $pre_title = get_sub_field( 'pre_title' ) ) : ?>
                        <span class="main-top__label">
                            <svg width="11" height="11">
                                <use href="<?php
                                echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                            </svg>
                            <?php echo esc_html( $pre_title ); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                        <h2 class="main-top__title"><?php echo esc_html( $title ); ?></h2>
                    <?php endif; ?>
                </div>

                <?php
                    $args = array(
                        'post_type' => 'events',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    
                    $query = new WP_Query($args);
                    
                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();   ?>
                            <div class="current-events">
                                <div class="current-events__image">
                                    <?php 
                                        add_image_size('custom-size', 695, 429, true);
                                        the_post_thumbnail('custom-size', array('class' => 'current-events_img'));
                                    ?>
                                </div>
                                <div class="current-events__info">
                                    <?php if ( $location = get_field( 'location' ) ) : ?>
                                        <span class="events-label">
                                            <svg width="11" height="11">
                                                <use href="<?php
                                                echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                            </svg>
                                            <?php echo esc_html( $location ); ?>
                                        </span>
                                    <?php endif; ?>
                                    <span class="current-events__name"><?php the_title();?></span>
                                    <div class="current-events__bottom">
                                        <?php 
                                            $acf_date = get_field('date');
                                            $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                                            $formatted_date = $date->format('d') . ' <i>' . $date->format('F Y') . '</i>';
                                            echo '<span class="current-events__date">' . $formatted_date . '</span>';
                                        ?>
                                        <a href="<?php echo get_permalink(); ?>" class="article-link blue">
                                            <svg width="14" height="11">
                                                <use href="<?php
                                                echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <div class="events-box">
        <div class="container">
            <div class="events-box__inner">
                <div class="events-box__filter">
                    <span class="events-label">
                        <svg width="11" height="11">
                            <use href="<?php
                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        more events
                    </span>

                    <div class="select" data-select>
                        <div class="select__header">
                            <input
                                    type="hidden"
                                    class="select__input input-select"
                                    name="#"
                                    value="1"
                            />
                            <span class="select__current" data-id="1">All events</span>
                            <svg width="5" height="11">
                                <use href="<?php
								echo $build_folder ?>img/sprite/sprite.svg#arrow-bottom"></use>
                            </svg>
                        </div>
                        <div class="select__body">
                            <?php 
                            $terms = get_terms(array(
                                'taxonomy' => 'event_type',
                                'hide_empty' => false,
                            ));

                            if (!empty($terms) && !is_wp_error($terms)): ?>
                                <ul class="select__list">
                                    <li class="select__option" data-term-id="all" data-id="1" data-type="option">
                                        All events
                                    </li>
                                    <?php $i = 2; foreach ($terms as $term): ?>
                                        <li class="select__option" data-term-id="<?php echo esc_attr($term->term_id); ?>" data-id="<?php echo $i; ?>" data-type="option">
                                            <?php echo esc_html($term->name); ?>
                                        </li>
                                    <?php $i++; endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                    $args = array(
                        'post_type' => 'events',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $query = new WP_Query($args);
                    $first_post_skipped = false;

                    if ($query->have_posts()):
                    ?>
                        <ul class="events-box__list">
                            <?php
                            while ($query->have_posts()): $query->the_post();
                                if (!$first_post_skipped) {
                                    $first_post_skipped = true;
                                    continue;
                                }
                                ?>
                                <li class="events-box__item">
                                    <div class="event-card">
                                        <div class="event-card__coll">
                                            <?php 
                                                $acf_date = get_field('date');
                                                $date = DateTime::createFromFormat('d/m/Y', $acf_date);
                                                $formatted_date = $date->format('d') . '<i>' . $date->format('M Y') . '</i>';

                                                echo '<span class="current-events__date">' . $formatted_date . '</span>';
                                            ?>
                                            <div class="event-card__image">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('custom-size', array('class' => 'event-card__image', 'width' => 445, 'height' => 256)); ?>
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
                                                    <?php echo get_field('location'); ?>
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
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>