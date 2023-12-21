<?php
    get_header(); 

    $build_folder = get_template_directory_uri() . '/assets/';
    $current_post_id = get_the_ID();
    $args = array(
        'post_type'      => 'team',
        'post_status'    => 'publish',
        'posts_per_page' => -1
    );

    $team_members = new WP_Query($args);
    $current_member = null;
    $other_members = array();

    if ($team_members->have_posts()) {
        while ($team_members->have_posts()) {
            $team_members->the_post();

            $member_socials = array();
            if (have_rows('social_list')) {
                while (have_rows('social_list')) {
                    the_row();
                    $member_socials[] = array(
                        'link' => get_sub_field('link'),
                        'icon' => get_sub_field('icon')
                    );
                }
            }

            $member_data = array(
                'id'            => get_the_ID(),
                'permalink'     => get_permalink(),
                'thumbnail'     => get_the_post_thumbnail_url(get_the_ID(), 'size'),
                'name'          => get_the_title(),
                'job_title'     => get_field('job_title'),
                'phone'         => get_field('phone'),
                'email'         => get_field('email'),
                'biography_title' => get_field('biography_title'),
                'biography_content' => get_field('biography_content'),
                'social_list'   => $member_socials
            );

            if (get_the_ID() == $current_post_id) {
                $current_member = $member_data;
            } else {
                $other_members[] = $member_data;
            }
        }
    }

    if ($current_member) {
        array_unshift($other_members, $current_member);
    }

    $members = $other_members;
    wp_reset_postdata();
?>



<div id="app" class="app">
    <div id="pages" class="pages" data-barba="wrapper">
        <div class="page page_default" data-barba-namespace="default" data-barba="container">

            <div class="page__content">
				<?php
				include get_template_directory() . '/repeater.php'; ?>

                <section class="team-single">
                    <div class="section-bg"></div>
                    <div class="container">
                        <div class="team-single__inner">
                            <a href="#" class="back-button">
                                <svg width="14" height="11">
                                    <use href="<?php
									echo $build_folder ?>img/sprite/sprite.svg#arrow-l"></use>
                                </svg>
                                Back to all team
                            </a>

                            <div class="team-single__sliders">
                                <div class="team-single__nav swiper-container">
                                    <ul class="swiper-wrapper">
                                        <?php foreach ($members as $member): ?>
                                            <li class="swiper-slide">
                                                <img src="<?php echo esc_url($member['thumbnail']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="team-single__slider swiper-container">
                                    <ul class="swiper-wrapper">
                                        <?php foreach ($members as $member): ?>
                                            <li class="swiper-slide">
                                                <img src="<?php echo esc_url($member['thumbnail']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                                                <div class="team-single__info">
                                                    <div class="team-single__info-top">
                                                        <h3 class="team-single__info-name"><?php echo esc_html($member['name']); ?></h3>
                                                        <span><?php echo esc_html($member['job_title']); ?></span>
                                                    </div>

                                                    <div class="team-single__info-middle">
                                                        <a href="tel:<?php echo esc_html($member['phone']); ?>" class="info-link"><?php echo esc_html($member['phone']); ?></a>
                                                        <a href="mailto:<?php echo esc_html($member['email']); ?>" class="info-link"><?php echo esc_html($member['email']); ?></a>
                                                        
                                                        <?php if (!empty($member['social_list'])): ?>
                                                    
                                                                <?php foreach ($member['social_list'] as $social): ?>
                                                                    <a class="social-link" href="<?php echo esc_url($social['link']); ?>">
                                                                        <img src="<?php echo esc_url($social['icon']); ?>" alt="Social Icon">
                                                                    </a>
                                                                <?php endforeach; ?>
                                        
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="team-single__info-content">
                                                        <h4><?php echo esc_html($member['biography_title']); ?> </h4>
                                                        <p><?php echo wp_kses_post($member['biography_content']); ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>

<?php
get_footer();
?>
