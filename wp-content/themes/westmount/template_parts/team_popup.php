<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $page_id      = get_queried_object_id();
?>

<section class="team-single">
    <div class="section-bg"></div>
    <div class="container">
        <div class="team-single__inner">
            <?php
            // Проверяем, существует ли подполе 'button' и получаем его данные
            $link = get_sub_field( 'button' );
            if ( $link ) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="back-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <svg width="14" height="11">
                        <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-l"></use>
                    </svg>
                    <?php echo esc_html( $link_title ); ?>
                </a>
            <?php endif; ?>

            <div class="team-single__sliders">
                <div class="team-single__nav swiper-container">
                    <ul class="swiper-wrapper">
                        <?php 
                        $args = array(
                            'post_type'      => 'team',
                            'posts_per_page' => -1,
                        );
                        $team_query = new WP_Query($args);
                        if ($team_query->have_posts()) :
                            while ($team_query->have_posts()) : $team_query->the_post();
                                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), '1440');
                                $post_slug = get_post_field('post_name', get_the_ID()); // Получаем слаг поста
                                ?>
                                <li class="swiper-slide" data-hash="<?php echo esc_attr($post_slug); ?>"> <!-- Добавляем data-id -->
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                                </li>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <div class="team-single__slider swiper-container">
                <ul class="swiper-wrapper">
                        <?php
                        // Повторный запрос, поскольку предыдущий сброшен методом wp_reset_postdata()
                        $team_query = new WP_Query($args);

                        if ($team_query->have_posts()) :
                            while ($team_query->have_posts()) : $team_query->the_post();
                                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), '1440');
                                // Получение дополнительных полей
                                $job_title = get_field('job_title'); // Предполагаем, что у вас есть поле ACF 'job_title'
                                $phone = get_field('phone'); // Поле 'phone'
                                $email = get_field('email'); // Поле 'email'
                                $biography_title = get_field('biography_title'); // Поле 'biography_title'
                                $biography_content = get_field('biography_content'); // Поле 'biography_content'
                                // Предполагаем, что у вас есть повторитель 'social_list' в ACF
                                $social_list = get_field('social_list');
                                ?>
                                <li class="swiper-slide">
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                                    <div class="team-single__info">
                                        <div class="team-single__info-top">
                                            <h3 class="team-single__info-name"><?php the_title(); ?></h3>
                                            <span><?php echo esc_html($job_title); ?></span>
                                        </div>

                                        <div class="team-single__info-middle">
                                            <a href="tel:<?php echo esc_html($phone); ?>" class="info-link"><?php echo esc_html($phone); ?></a>
                                            <a href="mailto:<?php echo esc_html($email); ?>" class="info-link"><?php echo esc_html($email); ?></a>
                                            
                                            <?php if (!empty($social_list)): ?>
                                                <div class="team-single__info-links">
                                                    <?php foreach ($social_list as $social): ?>
                                                        <a class="social-link" href="<?php echo esc_url($social['link']); ?>">
                                                            <img src="<?php echo esc_url($social['icon']); ?>" alt="Social Icon">
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="team-single__info-content">
                                            <h4><?php echo esc_html($biography_title); ?> </h4>
                                            <p><?php echo wp_kses_post($biography_content); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>