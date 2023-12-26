<?php if(!get_sub_field('hide_block', $page_id)): ?>

<?php $build_folder = get_template_directory_uri() . '/assets/'
?>

<section class="solution-section">
    <div class="section-bg"
         style="background-image: url(<?php echo esc_url( get_sub_field('background_image')['sizes']['1440'] ); ?>)"></div>
    <div class="container">
        <div class="solution-section__inner">
            <div class="main-top">
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
                    <p><?php echo esc_html( $sub_title ); ?></p>
                <?php endif; ?>
            </div>

            <ul class="card-list">
                <?php if ( have_rows( 'solutions_list' ) ) : ?>
                    <?php while ( have_rows( 'solutions_list' ) ) :
                        the_row(); ?>

                        <?php if(!get_sub_field('hide_block')): ?>
                            <li class="card-list__item 
                                <?php if ( get_sub_field( 'width_item' ) == '33%'){
                                        echo "-small";
                                    }elseif(get_sub_field( 'width_item' ) == '50%'){
                                        echo "-medium";
                                    }
                                    elseif(get_sub_field( 'width_item' ) == '100%'){
                                        echo "-large";
                                    }
                                ?>">
                                <article class="card-list__article">
                                    <div class="card-list__article-img">
                                        <img src="<?php echo esc_url( get_sub_field( 'image' )['sizes']['1440'] ); ?>" alt="">
                                    </div>

                                    <div class="card-list__article-inner">
                                        <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                                            <h3 class="card-list__article-title" <?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?> data-descr="<?php echo esc_html( $sub_title );?>" <?php endif; ?>><?php echo esc_html( $title ); ?></h3>
                                        <?php endif; ?>

                                        <?php if ( $description = get_sub_field( 'description' ) ) : ?>
                                            <p><?php echo $description; ?> </p>
                                        <?php endif; ?>

                                        <?php
                                            $link = get_sub_field( 'link' );
                                            if ( $link ) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="card-list__article-link arrow-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                                    <?php echo esc_html( $link_title ); ?> 
                                                    <svg width="14" height="11">
                                                        <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                                        </svg>
                                                </a>
                                            <?php endif; 
                                        ?>
                                    </div>
                                </article>
                            </li>
                        <?php endif; ?>   

                    <?php endwhile; ?>
                <?php endif; ?>   
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>