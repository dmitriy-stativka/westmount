<?php $build_folder = get_template_directory_uri() . '/assets/'?>

<section class="contact-section">
    <div class="section-bg"
         style="background-image: url('<?php echo $build_folder ?>img/new/artticle_section_bg.png')"></div>
	<div class="container">
        <div class="contact-section__inner">
            <div class="main-top contact-section__top">
                <span class="main-top__label">
                    <svg width="11" height="11">
                        <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                    </svg>
                    Contact us
                </span>
                <h2 class="main-top__title">At Westmount, we prioritize <br> swift responses <br>
                    to your inquiries. </h2>
                <p>Reach out to get the conversation started.</p>
            </div>

            <ul class="contact-list contact-section__list">
                <li class="contact-list__item">
                    <span class="contact-list__legend">Email:</span>
                    <a href="mailto:info@westmontguarantee.com">info@westmontguarantee.com</a>
                </li>
                <li class="contact-list__item">
                    <span class="contact-list__legend">Phone:</span>
                    <a href="mailto:info@westmontguarantee.com">647-499-8249</a>
                </li>
                <li class="contact-list__item">
                    <span class="contact-list__legend">Fax:</span>
                    <a href="fax:647.494.9859"">647-494-9859</a>
                </li>
            </ul>

            <div class="main-form contact-section__form">
                <h3 class="main-form__title contact-form__title">
                    <svg width="11" height="11">
                        <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                    </svg>
                    Fill the form
                </h3>
                
                <?php echo do_shortcode('[contact-form-7 id="547fd05"  title="Contact form 1"]'); ?>
            </div>

            <div class="map-box">
                <a href="#" class="map-box__image">
                    <img src="<?php echo $build_folder ?>img/new/map.png" alt="">
                </a>

                <ul class="contact-list">
                    <li class="contact-list__item">
                        <span class="contact-list__legend">Address:</span>
                        <a href="#">600 COCHRANE DRIVE #205, MARKHAM, ON L3R 5K3</a>
                    </li>
                </ul>

                <a href="#" class="blue-link">See on Google Map</a>
            </div>

        </div>
    </div>
</section>