<?php $build_folder = get_template_directory_uri() . '/assets/' ?>

<section class="team-section">
    <div class="container">
        <div class="team-section__inner">
            <div class="main-top mode">
                <span class="main-top__label">
                    <svg width="11" height="11">
                        <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                    </svg>
                    About Us
                </span>
                <h2 class="main-top__title">Our Team</h2>
                <p data-descr="Our approach is simple. We understand risk and the marketplace, and know how to deliver financing that creates value for the developer, and security to all parties involved. We make it happen in your time frame. Find out more about our team members below.">
                    We’ve been building relationships <br>
                    and helping developers build their vision <br>
                    for over 15 years</p>
            </div>

            <div class="team">
                <ul class="team-list">
<!--                    может быть лого в карточке-->
                    <li class="team-list__item">
                        <div class="team-card">
                            <a href="#" class="team-card__image">
                                <img src="<?php echo $build_folder ?>img/new/team.png" alt="">
                            </a>
                            <div class="team-card__inner">
                                <div class="team-card__top">
                                    <h3 class="team-card__name">
                                        JIM EMANOILIDIS
                                    </h3>
                                    <span>
                                        FOUNDER & EXECUTIVE CHAIRMAN
                                    </span>
                                </div>
                                
                                <div class="team-card__links">
                                    <a href="#">
                                        <img src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                    </a>
                                </div>

                                <div class="team-card__bottom">
                                    <span>T — 647.499.8249 X 203</span>
                                    <a href="#">jim@westmountguarantee.com</a>

                                    <a href="#" class="team-card__link article-link">
                                        <svg width="14" height="11">
                                        	<use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="team-list__item">
                        <div class="team-card">
                            <a href="#" class="team-card__image">
                                <img src="<?php echo $build_folder ?>img/new/team.png" alt="">
                            </a>
                            <div class="team-card__inner">
                                <div class="team-card__top">
                                    <h3 class="team-card__name">
                                        JIM EMANOILIDIS
                                    </h3>
                                    <span>
                                        FOUNDER & EXECUTIVE CHAIRMAN
                                    </span>
                                </div>

                                <div class="team-card__links">
                                    <a href="#">
                                        <img src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                    </a>
                                </div>

                                <div class="team-card__bottom">
                                    <span>T — 647.499.8249 X 203</span>
                                    <a href="mailto:jim@westmountguarantee.com">jim@westmountguarantee.com</a>

                                    <a href="#" class="team-card__link article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="team-list__item">
                        <div class="team-card">
                            <a href="#" class="team-card__image">
                                <img src="<?php echo $build_folder ?>img/new/team.png" alt="">
                            </a>
                            <div class="team-card__inner">
                                <div class="team-card__top">
                                    <h3 class="team-card__name">
                                        SANDY
                                        EWEN
                                    </h3>
                                    <span>
                                        CONSULTANT, DEVELOPER SOLUTIONS
                                    </span>
                                </div>

                                <div class="team-card__links">
                                    <a href="#">
                                        <img width="20" height="20" src="<?php echo $build_folder ?>img/new/link.svg" alt="">
                                    </a>
                                </div>

                                <div class="team-card__bottom">
                                    <img src="<?php echo $build_folder ?>img/new/card-team-logo.png" alt="">

                                    <a href="#" class="team-card__link article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>


<!--                Появится только в мобильной версии        -->
                <button class="team__more action_btn">
                    <span class="action_btn_text">Load More</span>
                    <div class="square">
                        <svg width="11" height="14">
                            <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-b"></use
                        </svg>
                    </div>
                </button>
            </div>
<!--                Появится только в мобильной версии        -->

        </div>
    </div>
</section>