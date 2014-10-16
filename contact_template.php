<?php
/*
	Template Name: Contact Page Template
*/
?>
<?php get_header(); ?>
	
<?php
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	}
?>

	<div class="wrapper">
		<main role="main">
			<!-- section -->
			<section>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" class="cf-main" <?php post_class(); ?>>
					<?php the_content(); ?>
					<?php comments_template( '', true ); // Remove if you don't want comments ?>
					<br class="clear">
				</article>
				<!-- /article -->
			<?php endwhile; ?>
			<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
			<?php endif; ?>
			</section>
			<!-- /section -->
			<div class="cf-left-sidebar">
				<h2>GRAZIA HEADQUARTERS</h2>
					<ul class="contact">
						<li class="location"><span>8605 SANTA MONICA BLVD, UNIT 18030, LOS ANGELES, CA 90069, USA</span></li>
						<li class="phone"><span>123.236.3214</span></li>
						<li class="email"><span>INFO@GRAZIA-PRODUCTS.COM</span></li>
					</ul>

					<ul class="social-icons">
						<li class="fb"><a href="https://www.facebook.com/GraziaProducts" target="_blank"></a></li>
						<li class="twitter"><a href="https://twitter.com/GraziaProducts" target="_blank"></a></li>
						<li class="pinterest"><a href="http://www.pinterest.com/graziaproducts/" target="_blank"></a></li>
						<li class="instagram"><a href="#"></a></li>
						<li class="youtube"><a href="https://www.youtube.com/channel/UCaXGbTCTAKzrVdHbtEkGfeQ" target="_blank"></a></li>
					</ul>

			</div>
			
			<div style="clear:both"></div>
		</main>
	</div>

<?php get_footer(); ?>
