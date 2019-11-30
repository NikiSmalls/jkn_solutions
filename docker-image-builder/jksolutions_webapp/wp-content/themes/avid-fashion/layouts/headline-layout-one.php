<div class="headline-ticker-1">
	<div class="container-fluid">
		<div class="headline-ticker-wrapper">
			<?php if( $title ) : ?><div class="headline-title"><?php echo esc_html( $title ); ?></div><?php endif; ?>
			<div class="headline-wrapper">
			<div id="owl-heading-1" class="owl-carousel" >
			<?php while( $query->have_posts() ) : $query->the_post(); ?> 
				<div class="item">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
					<?php if( ! empty( $image ) ) : ?>
						<a href="<?php the_permalink(); ?>" class="feature-image">
							<img src="<?php echo esc_url( $image[0] ); ?>" class="img-responsive">
						</a>
					<?php endif; ?>
					<div class="headline-content"><small><?php echo get_the_date(); ?></small> 
					<h4><a href="<?php the_permalink(); ?>" class="heading-title"><?php the_title(); ?></a></h4>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
				
			</div>
			</div>
		</div>
	</div>
</div>
