<?php
get_header(); ?>

<?php
$build_folder = get_template_directory_uri() . '/assets/';
$page_id      = get_queried_object_id();

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
                                        <li class="swiper-slide">
                                            <img src="<?php
											echo $build_folder ?>img/new/single_team_nav.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
											echo $build_folder ?>img/new/single_team_nav2.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
											echo $build_folder ?>img/new/single_team_nav3.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
											echo $build_folder ?>img/new/single_team_nav4.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
											echo $build_folder ?>img/new/single_team_nav5.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                                <div class="team-single__slider swiper-container">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <img src="<?php
											echo $build_folder ?>img/new/single_team.png" alt="">
                                            <div class="team-single__info">
                                                <div class="team-single__info-top">
                                                    <h3 class="team-single__info-name">
                                                        JIM <br>
                                                        EMANOILIDIS
                                                    </h3>
                                                    <span>FOUNDER & EXECUTIVE CHAIRMAN</span>
                                                </div>

                                                <div class="team-single__info-middle">
                                                    <a href="#" class="info-link">T — 647.499.8249 X 201</a>
                                                    <a href="mailto:jim@westmountguarantee.com" class="info-link">E — jim@westmountguarantee.com</a>
                                                    <a href="#" class="social-link">
                                                        <img width="20" height="20" src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                                    </a>
                                                </div>

                                                <div class="team-single__info-content">
                                                    <h4>
                                                        Biography
                                                    </h4>

                                                    <p>
                                                        Jim Emanoilidis serves as the Chairman and Founder of Westmount Guarantee, driving the company's success with his visionary leadership.
                                                        <br><br>With a rich background in the real estate industry, Jim has leveraged his expertise to establish Westmount Guarantee as a trusted name in the field. As Chairman, Jim sets the strategic direction of the company, constantly striving for excellence and innovation. His unwavering commitment to client satisfaction and his ability to anticipate industry trends have solidified Westmount Guarantee's position as a leader in the market. Jim's entrepreneurial spirit and dedication to tailored solutions have shaped the company's culture, ensuring that clients receive the highest level of service and customized solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
		                                    echo $build_folder ?>img/new/single_team.png" alt="">
                                            <div class="team-single__info">
                                                <div class="team-single__info-top">
                                                    <h3 class="team-single__info-name">
                                                        JIM <br>
                                                        EMANOILIDIS 2
                                                    </h3>
                                                    <span>FOUNDER & EXECUTIVE CHAIRMAN</span>
                                                </div>

                                                <div class="team-single__info-middle">
                                                    <a href="#" class="info-link">T — 647.499.8249 X 201</a>
                                                    <a href="mailto:jim@westmountguarantee.com" class="info-link">E — jim@westmountguarantee.com</a>
                                                    <a href="#" class="social-link">
                                                        <img width="20" height="20" src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                                    </a>
                                                </div>

                                                <div class="team-single__info-content">
                                                    <h4>
                                                        Biography
                                                    </h4>

                                                    <p>
                                                        Jim Emanoilidis serves as the Chairman and Founder of Westmount Guarantee, driving the company's success with his visionary leadership.
                                                        <br><br>With a rich background in the real estate industry, Jim has leveraged his expertise to establish Westmount Guarantee as a trusted name in the field. As Chairman, Jim sets the strategic direction of the company, constantly striving for excellence and innovation. His unwavering commitment to client satisfaction and his ability to anticipate industry trends have solidified Westmount Guarantee's position as a leader in the market. Jim's entrepreneurial spirit and dedication to tailored solutions have shaped the company's culture, ensuring that clients receive the highest level of service and customized solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
		                                    echo $build_folder ?>img/new/single_team.png" alt="">
                                            <div class="team-single__info">
                                                <div class="team-single__info-top">
                                                    <h3 class="team-single__info-name">
                                                        JIM <br>
                                                        EMANOILIDIS 3
                                                    </h3>
                                                    <span>FOUNDER & EXECUTIVE CHAIRMAN</span>
                                                </div>

                                                <div class="team-single__info-middle">
                                                    <a href="#" class="info-link">T — 647.499.8249 X 201</a>
                                                    <a href="mailto:jim@westmountguarantee.com" class="info-link">E — jim@westmountguarantee.com</a>
                                                    <a href="#" class="social-link">
                                                        <img width="20" height="20" src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                                    </a>
                                                </div>

                                                <div class="team-single__info-content">
                                                    <h4>
                                                        Biography
                                                    </h4>

                                                    <p>
                                                        Jim Emanoilidis serves as the Chairman and Founder of Westmount Guarantee, driving the company's success with his visionary leadership.
                                                        <br><br>With a rich background in the real estate industry, Jim has leveraged his expertise to establish Westmount Guarantee as a trusted name in the field. As Chairman, Jim sets the strategic direction of the company, constantly striving for excellence and innovation. His unwavering commitment to client satisfaction and his ability to anticipate industry trends have solidified Westmount Guarantee's position as a leader in the market. Jim's entrepreneurial spirit and dedication to tailored solutions have shaped the company's culture, ensuring that clients receive the highest level of service and customized solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
		                                    echo $build_folder ?>img/new/single_team.png" alt="">
                                            <div class="team-single__info">
                                                <div class="team-single__info-top">
                                                    <h3 class="team-single__info-name">
                                                        JIM <br>
                                                        EMANOILIDIS 4
                                                    </h3>
                                                    <span>FOUNDER & EXECUTIVE CHAIRMAN</span>
                                                </div>

                                                <div class="team-single__info-middle">
                                                    <a href="#" class="info-link">T — 647.499.8249 X 201</a>
                                                    <a href="mailto:jim@westmountguarantee.com" class="info-link">E — jim@westmountguarantee.com</a>
                                                    <a href="#" class="social-link">
                                                        <img width="20" height="20" src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                                    </a>
                                                </div>

                                                <div class="team-single__info-content">
                                                    <h4>
                                                        Biography
                                                    </h4>

                                                    <p>
                                                        Jim Emanoilidis serves as the Chairman and Founder of Westmount Guarantee, driving the company's success with his visionary leadership.
                                                        <br><br>With a rich background in the real estate industry, Jim has leveraged his expertise to establish Westmount Guarantee as a trusted name in the field. As Chairman, Jim sets the strategic direction of the company, constantly striving for excellence and innovation. His unwavering commitment to client satisfaction and his ability to anticipate industry trends have solidified Westmount Guarantee's position as a leader in the market. Jim's entrepreneurial spirit and dedication to tailored solutions have shaped the company's culture, ensuring that clients receive the highest level of service and customized solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php
		                                    echo $build_folder ?>img/new/single_team.png" alt="">
                                            <div class="team-single__info">
                                                <div class="team-single__info-top">
                                                    <h3 class="team-single__info-name">
                                                        JIM <br>
                                                        EMANOILIDIS 5
                                                    </h3>
                                                    <span>FOUNDER & EXECUTIVE CHAIRMAN</span>
                                                </div>

                                                <div class="team-single__info-middle">
                                                    <a href="#" class="info-link">T — 647.499.8249 X 201</a>
                                                    <a href="mailto:jim@westmountguarantee.com" class="info-link">E — jim@westmountguarantee.com</a>
                                                    <a href="#" class="social-link">
                                                        <img width="20" height="20" src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                                    </a>
                                                </div>

                                                <div class="team-single__info-content">
                                                    <h4>
                                                        Biography
                                                    </h4>

                                                    <p>
                                                        Jim Emanoilidis serves as the Chairman and Founder of Westmount Guarantee, driving the company's success with his visionary leadership.
                                                        <br><br>With a rich background in the real estate industry, Jim has leveraged his expertise to establish Westmount Guarantee as a trusted name in the field. As Chairman, Jim sets the strategic direction of the company, constantly striving for excellence and innovation. His unwavering commitment to client satisfaction and his ability to anticipate industry trends have solidified Westmount Guarantee's position as a leader in the market. Jim's entrepreneurial spirit and dedication to tailored solutions have shaped the company's culture, ensuring that clients receive the highest level of service and customized solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
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
wp_footer();
?>

</body>
</html>