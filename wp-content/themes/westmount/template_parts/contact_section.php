<?php $build_folder = get_template_directory_uri() . '/assets/'?>

<section class="contact-section">
    <div class="section-bg"
         style="background-image: url(<?php echo esc_url( get_sub_field( 'background_image' ) ); ?>)"></div>
	<div class="container">
        <div class="contact-section__inner">
            <div class="main-top contact-section__top">
                <?php if ( $pre_title = get_sub_field( 'pre_title' ) ) : ?>
                    <span class="main-top__label">
                        <svg width="11" height="11">
                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        <?php echo esc_html( $pre_title ); ?>
                    </span>
                <?php endif; ?>

                <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                    <h2 class="main-top__title"> <?php echo $title ?> </h2>
                <?php endif; ?>

                <?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
                    <p><?php echo esc_html( $sub_title ); ?></p>
                <?php endif; ?>
            </div>

            <ul class="contact-list contact-section__list">

                <?php if ( $email = get_sub_field( 'email' ) ) : ?>
                    <li class="contact-list__item">
                        <span class="contact-list__legend">Email:</span>
                        <a href="mailto:<?php echo esc_html( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                    </li>
                <?php endif; ?>

                <?php if ( $phone = get_sub_field( 'phone' ) ) : ?>
                    <li class="contact-list__item">
                        <span class="contact-list__legend">Phone:</span>
                        <a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a>
                    </li>
                <?php endif; ?>

                <?php if ( $fax = get_sub_field( 'fax' ) ) : ?>
                    <li class="contact-list__item">
                        <span class="contact-list__legend">Fax:</span>
                        <a href="fax:<?php echo esc_html( $fax ); ?>"><?php echo esc_html( $fax ); ?></a>
                    </li>
                <?php endif; ?>

            </ul>

            <div class="main-form contact-section__form">

                <?php if ( $title_form = get_sub_field( 'title_form' ) ) : ?>
                    <h3 class="main-form__title contact-form__title">
                        <svg width="11" height="11">
                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        <?php echo esc_html( $title_form ); ?>
                    </h3>
                <?php endif; ?>

                <?php if ( $form_shortcode = get_sub_field( 'form_shortcode' ) ) : ?>
                    <?php echo do_shortcode($form_shortcode); ?>
                <?php endif; ?>
                
            </div>

            <div class="map-box">
                <a href="<?php if ( $map_link = get_sub_field( 'map_link' ) ) : ?>  <?php echo esc_html( $map_link ); ?><?php endif; ?>" class="map-box__image">
                    <img src="<?php echo esc_url( get_sub_field( 'map_image' ) ); ?>" alt="">
                </a>

                <ul class="contact-list">
                    <li class="contact-list__item">
                        <span class="contact-list__legend">Address:</span>
                        <a href="<?php if ( $address_link = get_sub_field( 'address_link' ) ) : echo esc_html( $address_link ); endif; ?>"><?php if ( $address = get_sub_field( 'address' ) ) : ?><?php echo esc_html( $address ); ?><?php endif; ?></a>
                    </li>
                </ul>

                <?php
                    $link = get_sub_field( 'button' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="blue-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; 
                ?>
            </div>

        </div>
    </div>
</section>