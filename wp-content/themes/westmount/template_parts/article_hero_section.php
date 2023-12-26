<?php if(!get_sub_field('hide_block', $page_id)): ?>
<?php $build_folder = get_template_directory_uri() . '/assets/'?>

<section class="article-hero" >
    <div class="section-bg"
         style="background-image: url(<?php echo esc_url( get_sub_field( 'background_image' ) ); ?>)"></div>
	<div class="container">
		<div class="article-hero__inner">
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
					<h2 class="main-top__title"><?php echo $title; ?></h2>
				<?php endif; ?>
			</div>

			<?php if ( $scroll_text = get_sub_field( 'scroll_text' ) ) : ?>
				<span class="scl-trg"><?php echo esc_html( $scroll_text ); ?></span>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>