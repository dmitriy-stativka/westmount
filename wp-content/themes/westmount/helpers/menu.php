<?php

$build_folder = get_template_directory_uri() . '/assets/';
//$link         = get_field( 'link', 'options' );
$logo = get_field( 'logo', 'options' );
?>

<div class="custom-menu" style="background-image: url('<?php
echo $build_folder ?>/img/bg_menu.png');">
    <div class="container">
        <div class="custom-menu__inner">
            <div class="custom-menu__top">
                <a href="/" class="custom-menu__logo">
                    <img width="221" height="31" src="<?php
					echo $logo["sizes"]['1440'] ?>" alt="logo"/>
                </a>

                <button class="custom-menu__btn burger active">
                    <svg width="17" height="17">
                        <use href="<?php
						echo $build_folder ?>img/sprite/sprite.svg#open"></use>
                    </svg>
                </button>
            </div>

            <div class="custom-menu__content">

                <?php if ( $pre_title = get_field( 'pre_title', 'options' ) ) : ?>
                    <span class="events-label">
                        <svg width="11" height="11">
                            <use href="<?php
                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        <?php echo esc_html( $pre_title ); ?>
                    </span>
                <?php endif; ?>

                <?php if ( $title = get_field( 'title', 'options' ) ) : ?>
                    <h3 class="custom-menu__title"><?php echo esc_html( $title ); ?> </h3>
                <?php endif; ?>
                
                <?php if ( $description = get_field( 'description', 'options' ) ) : ?>
                    <div class="custom-menu__text"><?php echo $description; ?></div>
                <?php endif; ?>

                <?php
                    $link = get_field( 'cta', 'options' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="action_btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <div class="action_btn_text"><?php echo esc_html( $link_title ); ?></div>
                            <div class="square">
                                <img src="<?php
                                echo $build_folder ?>/img/arrow_btn.svg" alt="arrow"/>
                            </div>
                        </a>
                    <?php endif; ?>



              

                <div class="custom-menu__content-bottom">

                    <ul class="social">
                        <li>
                            <a href="<?php echo get_field( 'linkedin_link', 'options' )['url'];?>">
                                <img src="<?php echo esc_url( get_field( 'linkedin_logo', 'options' ) ); ?>" alt="logo in"/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_field( 'instagram_link', 'options' )['url'];?>">
                                <img src="<?php echo esc_url( get_field( 'instagram_logo', 'options' ) ); ?>" alt="logo instagram"/>
                            </a>
                        </li>
                    </ul>


                    <ul class="contacts">
                        <?php if ( $tel = get_field( 'tel', 'options' ) ) : ?>
                            <li>
                                <a href="tel:<?php echo esc_html( $tel ); ?>"><?php echo esc_html( $tel ); ?></a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
                            <li>
                                <a href="mailto:<?php echo esc_html( $email ); ?>">
                                    <?php echo esc_html( $email ); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <nav class="custom-menu__nav">
                <?php print_custom_menu(); ?>
            </nav>

        </div>
    </div>
</div>
