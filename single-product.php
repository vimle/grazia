<?php get_header(); ?>
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/js/lightslider/css/lightSlider.css" />
<script src="<?php echo bloginfo('template_url'); ?>/js/lightslider/js/jquery.lightSlider.min.js"></script>
<script>
	jQuery(function($) {
		$('#imageGallery').lightSlider({
		gallery:true,
		item:1,
		slideMove: 1,
		slideMargin:0,
		mode: 'fade',
		thumbMargin:0,
		currentPagerPosition:'left',
		thumbItem:3,
		loop:true
		});
	})(jQuery);
</script>

<main role="main">
	<!-- section -->
	<section class="wrapper">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="inner-content">
				<h1 class="product-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<p><?php echo do_shortcode('[RICH_REVIEWS_SNIPPET category="page"]'); ?></p>


				<div class="clear">
					<div class="column-7">
						<div class="product-slider">
							<ul id="imageGallery">
								<?php if(get_field('images')): ?>
								<?php while(the_repeater_field('images')): ?>
								<?php $image = wp_get_attachment_image_src(get_sub_field('product_images'), 'product-preview'); ?>
								<?php $thumb = wp_get_attachment_image_src(get_sub_field('product_images'), 'product-thumb'); ?>
								<li data-thumb="<?php echo $thumb[0]; ?>">
									<img src="<?php echo $image[0]; ?>" alt="<?php  the_sub_field('title');?>" />
								</li>
								<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
						<!-- /slider -->
					</div>
					<div class="product-bullets column-5">
						<?php the_content(); // Dynamic Content ?>
					</div>
				</div>
			</div>
			
			<div class="inner-content">
				
				<h1 class="bold-title">Ratings and Reviews <a href="" class="write-review">Write a review</a></h1>
				
				<div class="product-review">
					<?php echo do_shortcode('[RICH_REVIEWS_FORM category="page"]'); ?>
				</div>

				<p><?php echo do_shortcode('[RICH_REVIEWS_SHOW category="page"]'); ?></p>
			</div>

			<div class="inner-content">
				<h1 class="bold-title">You may also like</h1>
                <div class="clear featured-products">
                	<?php $args = array( 'numberposts' => '4', 'orderby' => 'rand', 'post_type' => 'product');
	                $recent_posts = wp_get_recent_posts( $args );
	                foreach( $recent_posts as $recent ){
	                    echo '<div class="featured-prj column-4"><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   get_the_post_thumbnail($recent["ID"], 'product-recent-prev') .'</a></div> ';
	                } ?>
                </div>
			</div>
	
		</article>
		<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
		<!-- /article -->
		<?php endif; ?>
	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>