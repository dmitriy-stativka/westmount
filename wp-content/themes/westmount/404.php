
<?php $build_folder = get_template_directory_uri() . '/assets/'?>
<?php get_header() ?>

    <section class="contact-section error">
        <div class="container">
            <div class="contact-section__error">

                <div class="main-top">
                    <h1 class="main-top__title">404</h1>
                    <h2 class="main-top__subtitle">Page not found</h2>

                    <a href="/" class="action_btn">
                        <span class="action_btn_text">Home</span>
                        <div class="square">
                            <svg width="11" height="14">
                                <use href="<?php echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>



    </section>

<?php get_footer() ?>