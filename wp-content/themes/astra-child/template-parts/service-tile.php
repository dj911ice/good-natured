<div class="price-tile__container">
	<?php $args = array('post_type'=>'service'); ?>
	<?php $sloop = new WP_Query($args); ?>
	<?php while ($sloop->have_posts()) : $sloop->the_post(); ?>
	<div class="price-tile column small-12 medium-3">
		<div class="price-tile__title">
			<?php echo the_title(); ?>
		</div>	
		<div class="price-tile__price">
			£<?php 
				$current_post_id = get_the_ID();
				$key = 'wpcf-price';
				$price = get_post_meta( $current_post_id, $key, true );
				echo $price; ?>
		</div>
		<div class="price-tile__description">
			<?php echo the_content(); ?>
		</div>
	</div>
  <?php endwhile; ?>
</div>