<section class="article-content">
    <div class="container">
        <div class="article-content__inner" data-tabs-init>
            <ul class="tabs-nav">
                <?php if ( have_rows( 'tab' ) ) : ?>
                    <?php $i = 1; while ( have_rows( 'tab' ) ) :
                        the_row(); ?>
                        <li class="tabs-nav__item">
                            <button class="tabs-nav__btn default-button <?php if($i == 1){ echo 'active'; }?>" type="button" data-tab="<?php echo $i;?>">
                                <?php if ( $tab_title = get_sub_field( 'tab_title' ) ) : ?>
                                    <?php echo esc_html( $tab_title ); ?>
                                <?php endif; ?>
                            </button>
                        </li>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
            </ul>
            <ul class="tabs-content">
                <?php if ( have_rows( 'tab' ) ) : ?>
                    <?php $i = 1; while ( have_rows( 'tab' ) ) :
                        the_row(); ?>
                            <li class="tabs-content__item <?php if($i == 1){ echo 'active'; }?>" data-tab-content="<?php echo $i;?>">
                                <ul class="accordion" data-default="1" data-single="true" data-breakpoint="9999" data-accordion>
                                    <?php if ( have_rows( 'tab_content' ) ) : ?>
                                        <?php $index = 1; while ( have_rows( 'tab_content' ) ) :
                                            the_row(); ?>
                                            <li class="accordion__item">
                                                <button class="accordion__btn" data-id="<?php echo $index;?>"> <?php if ( $title = get_sub_field( 'title' ) ) : echo esc_html( $title ); endif; ?></button>
                                                <div class="accordion__content" data-content="<?php echo $index;?>">
                                                    <div class="article-content__text">
                                                        <p>
                                                            <?php if ( $description = get_sub_field( 'description' ) ) : echo $description; endif; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php $index++; endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </li>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>