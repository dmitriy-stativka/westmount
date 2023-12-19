<?php 
    $build_folder = get_template_directory_uri() . '/assets/';
    $footerLogo1 = get_field('footer_logo_1', 'options'); 
    $footerLogo2 = get_field('footer_logo_2', 'options'); 
?>           
</main>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__logos">
                    <?php
                        $link = get_field( 'footer_logo_link_1', 'options' );
                        if ( $link ) :
                            $link_url = $link['url'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <img src="<?php echo $footerLogo1; ?>" alt="Logo footer">
                            </a>
                        <?php endif; 
                 
                        $link = get_field( 'footer_logo_link_2', 'options' );
                        if ( $link ) :
                            $link_url = $link['url'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <img src="<?php echo $footerLogo2; ?>" alt="Logo footer">
                            </a>
                        <?php endif; 
                    ?>
                </div>

                <div class="footer__contact">
                    <ul class="footer-social">
                        <li class="footer-social__item">
                            <?php
                                $link = get_field( 'linkedin_link', 'options' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="footer-social__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <img width="20" height="20" src="<?php echo esc_url( get_field( 'linkedin_logo', 'options' ) ); ?>" alt="">
                                    </a>
                                <?php endif; 
                            ?>
                        </li>
                        
                        <li class="footer-social__item">
                            <?php
                                $link = get_field( 'instagram_link', 'options' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="footer-social__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <img width="20" height="20" src="<?php echo esc_url( get_field( 'instagram_logo', 'options' ) ); ?>" alt="">
                                    </a>
                                <?php endif; 
                            ?>
                        </li>
                    </ul>

                    <?php if ( $tel = get_field( 'tel', 'options' ) ) : ?>
                        <a href="tel:<?php echo esc_html( $tel ); ?>" class="footer__contact-link">
                            <?php echo esc_html( $tel ); ?>
                         </a>
                    <?php endif; ?>

                    <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
                        <a href="mailto:<?php echo esc_html( $email ); ?>" class="footer__contact-link">
                            <?php echo esc_html( $email ); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <ul class="footer__nav footer-nav">
                    <li class="footer-nav__item">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu-1',
                                'walker' => new Footer_Menu_Walker(),
                                'container' => false,
                                'menu_id' => false,
                                'menu_class' => ''
                            ));
                            
                        ?>
                    </li>

                    <li class="footer-nav__item">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu-2',
                                'walker' => new Footer_Menu_Walker(),
                                'container' => false,
                                'menu_id' => false,
                                'menu_class' => ''
                            ));
                        ?>
                    </li>
                </ul>

            </div>
        </div>

        <div class="container">
            <div class="footer__bottom">
                <ul>
                    <?php if ( have_rows( 'footer_menu', 'options' ) ) : ?>
                        <?php while ( have_rows( 'footer_menu', 'options' ) ) :
                            the_row(); ?>

                            <li>
                                <?php
                                    $link = get_sub_field( 'link', 'options' );
                                    if ( $link ) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; 
                                ?>
                            </li>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>



                <span><?php the_field('website_by', 'options'); ?></span>
                <span><?php the_field('copywrite', 'options'); ?></span>
            </div>
        </div>
    </footer>

<?php wp_footer() ?>
</body>
</html>