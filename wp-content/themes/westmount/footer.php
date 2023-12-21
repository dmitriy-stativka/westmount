 <?php $build_folder = get_template_directory_uri() . '/assets/'?>           </main>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__logos">
                    <a href="#">
                        <img src="<?php echo $build_folder ?>img/sprite/footer_logo.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo $build_folder ?>img/sprite/footer_logo_2.svg" alt="">
                    </a>
                </div>

                <div class="footer__contact">
                    <ul class="footer-social">
                        <li class="footer-social__item">
                            <a href="#1" class="footer-social__link">
                                <img width="20" height="20" src="<?php echo $build_folder ?>img/sprite/lin.svg" alt="">
                            </a>
                        </li>
                        <li class="footer-social__item">
                            <a href="#2" class="footer-social__link">
                                <img width="20" height="20" src="<?php echo $build_folder ?>img/sprite/insta.svg" alt="">
                            </a>
                        </li>
                    </ul>

                    <a href="tel:6474998249" class="footer__contact-link">
                        647-499-8249
                    </a>
                    <a href=mailto:info@westmontguarantee.com" class="footer__contact-link">
                        info@westmontguarantee.com
                    </a>

                </div>

                <ul class="footer__nav footer-nav">
                    <li class="footer-nav__item">
                        <h4 class="footer-nav__title">
                            <svg width="11" height="11">
                                <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                            </svg>
                            Quick Links
                        </h4>
                        <ul>
                            <li><a href="#">Our Company</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Westmount West</a></li>
                        </ul>
                    </li>
                    <li class="footer-nav__item">
                        <h4 class="footer-nav__title">
                            <svg width="11" height="11">
                                <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                            </svg>
                            Solutions
                        </h4>

                        <ul>
                            <li><a href="#">Tarion Bond</a></li>
                            <li><a href="#">Condominium
                                    Deposit Insurance</a></li>
                            <li><a href="#">Freehold Deposit Insurance</a></li>
                            <li><a href="#">Site & Subdivision Security</a></li>
                            <li><a href="#">Westmount Plus</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>

        <div class="container">
            <div class="footer__bottom">
                <ul>
                    <li><a href="#">Legal Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

                <span>Website by Pixelcarve</span>
                <span>Copyright © 2020 Westmount Guarantee Services inc.</span>
            </div>
        </div>
    </footer>
    <div data-overlay></div>

<?php wp_footer() ?>
</body>
</html>