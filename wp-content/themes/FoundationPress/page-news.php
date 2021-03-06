<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="page-container">
	<div class="body-content-container">
		
		<div class="front-hero-slider-container hero-container centered-content">
			<image src="wp-content/themes/FoundationPress/src/assets/images/heroimg.png"></image>
		</div>
		<div class="divider-container flex-container align-center">
			<div class="scroll-down-divider">
				<image src="wp-content/themes/FoundationPress/src/assets/images/scroll-down.png" class="centered-content"></image>
			</div>
		</div>
				<!-- inserts class recipe-image-slider -->
		
		<div class="divider"></div>
		
		
		<!-- this is the Billboard facts section -->
		<section class="billboard-info-card-container">
			<div class="info-card">
				<div class="info-card__image">
					<image src=""></image>
				</div>
				<div class="info-card__info">
					<div class="info-card__info__headline"></div>
					<div class="info-card__info__bullets"></div>
					<div class="info-card__info__more-button"></div>
				</div>
			</div>
		</section>
		
		<divider></divider>
		
		<section class="news-blog-container">
			<div class="news-blog__title">
				
			</div>
			<div class="news-blog__slider">
				<!-- php news_slider_loop() -->
			</div>
		</section>
		
		
		<?php do_action( 'foundationpress_after_content' ); ?>
		
		<divider></divider>
	</div>
	
	
	<p>this is the end of the page template</p>
</div>
<?php get_footer();
