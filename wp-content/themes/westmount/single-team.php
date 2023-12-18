<?php get_header(); ?>

<?php
$build_folder = get_template_directory_uri() . '/assets/';
$page_id      = get_queried_object_id();

?>

<div id="app" class="app">
    <div id="pages" class="pages" data-barba="wrapper">
        <div class="page page_default" data-barba-namespace="default" data-barba="container">

            <div class="page__content">
				<?php include get_template_directory() . '/repeater.php'; ?>


                <section class="team-single">
                    <div class="section-bg"></div>
                    <div class="container">
                        <div class="team-single__inner">
                            <a href="#" class="back-button">
                                <svg width="14" height="11">
                                    <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-l"></use>
                                </svg>
                                Back to all team
                            </a>


                            <div class="team-single__sliders">
                                <div class="team-single__nav swiper-container">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team_nav.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team_nav2.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team_nav3.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team_nav4.png" alt="">
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team_nav5.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                                <div class="team-single__slider swiper-container">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team.png" alt="">
                                            <div class="team-single__info">
                                                        1
                                            </div>
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team.png" alt="">2
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team.png" alt="">3
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team.png" alt="">4
                                        </li>
                                        <li class="swiper-slide">
                                            <img src="<?php echo $build_folder ?>img/new/single_team.png" alt="">4
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