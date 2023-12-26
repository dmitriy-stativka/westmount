<?php if(!get_sub_field('hide_block', $page_id)): ?>
<?php $build_folder = get_template_directory_uri() . '/assets/' ?>

<section class="team-section">
    <div class="container">
        <div class="team-section__inner">
            <div class="main-top mode">
                <?php if ( $pre_title = get_sub_field( 'pre_title' ) ) : ?>
                    <span class="main-top__label">
                        <svg width="11" height="11">
                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        <?php echo esc_html( $pre_title ); ?>
                    </span>
                <?php endif; ?>
                <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                    <h2 class="main-top__title"><?php echo esc_html( $title ); ?></h2>
                <?php endif; ?>
                <?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
                    <p <?php if ( $description = get_sub_field( 'description' ) ) : ?> data-descr="<?php echo $description; ?>"<?php endif; ?>><?php echo $sub_title; ?></p>
                <?php endif; ?>
            </div>

            <div class="team">
                <?php
                    $args = array(
                        'post_type'      => 'team',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        echo '<ul class="team-list">';
                        while ($query->have_posts()) {
                            $query->the_post(); 
                            $team_member_slug = $post->post_name;
                        ?>
                            

                            <li class="team-list__item">
                                <div class="team-card">
                                    <a href="<?php echo get_permalink();?>" class="team-card__image">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail('1440');
                                            }
                                        ?>
                                    </a>
                                    <div class="team-card__inner">
                                        <div class="team-card__top">
                                            <h3 class="team-card__name"><?php echo get_the_title();?></h3>
                                            <?php if ( $job_title = get_field( 'job_title' ) ) : ?>
                                                <span><?php echo esc_html( $job_title ); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ( have_rows( 'social_list' ) ) : ?>
                                            <div class="team-card__links">
                                                <?php while ( have_rows( 'social_list' ) ) :
                                                    the_row(); ?>
                                                    <a href="<?php echo get_sub_field( 'link' ); ?>">
                                                        <img src="<?php echo esc_url( get_sub_field( 'icon' ) ); ?>" alt="">
                                                    </a>
                                                <?php endwhile; ?>
                                                </div>
                                        <?php endif; ?>

                                        <div class="team-card__bottom">
                                            <?php if( get_field( 'logo' ) ){ ?>
                                                <img src="<?php echo esc_url( get_field( 'logo' ) ); ?>" alt="">
                                            <?php } else{ ?>
                                                
                                                <?php if ( $phone = get_field( 'phone' ) ) : ?>
                                                    <span><?php echo esc_html( $phone ); ?></span>
                                                <?php endif; ?>


                                                <?php if ( $email = get_field( 'email' ) ) : ?>
                                                    <a href="mailto:<?php echo esc_html( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                                                <?php endif; ?>
                                            <?php }?>

                                        
                                            <a href="/team/#<?php echo esc_attr($team_member_slug); ?>" class="team-card__link article-link">
                                                <svg width="14" height="11">
                                                    <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }
                        echo '</ul>';
                    } 
                    
                    wp_reset_postdata();
                ?>


                <button class="team__more action_btn">
                    <span class="action_btn_text">Load More</span>
                    <div class="square">
                        <svg width="11" height="14">
                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-b"></use>
                        </svg>
                    </div>
                </button>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>