<?php /* Template Name: Home */ get_header(); ?>
<main role="main">

	<section class="home-featured">
		<img src="<?php echo bloginfo('template_url'); ?>/img/tray-home.png" alt="" class="img-tray">
		<div class="clear wrap-home-box">
			<div class="column-4 home-box"><a href="">Our Products</a></div>
			<div class="column-4 home-box"><a href="">Seasonal/ Promo</a></div>
			<div class="column-4 home-box"><a href="">Recipes</a></div>
		</div>
	</section>
	<!-- /home-featured -->


	<section class="home-story wrapper clear">
		<div class="column-6">
			<h1>Our Story</h1>
			<p>When quality ingredients and thoughtful preparation are combined, food offers us an opportunity to share.<a href="our-story" class="home-readmore">Read More</a></p>
			
		</div>
		<div class="column-6">
			<img class="alignright" src="<?php echo bloginfo('template_url'); ?>/img/italian restaurant.png" alt="Italian Restaurant">
		</div>
	</section>
	<!-- /home-story -->


	<section class="home-shop wrapper">
		<h1>Shop Products</h1>
		<div class="clear">
			<div class="column-4">
				<h2>Cake/Muffin Pans</h2>
				<img src="//lorempixel.com/296/240/food" alt="Sample Text">
			</div>
			<div class="column-4">
				<h2>Gift Sets</h2>
				<img src="//lorempixel.com/296/240/food" alt="Sample Text">
			</div>
			<div class="column-4">
				<h2>Popsicles</h2>
				<img src="//lorempixel.com/296/240/food" alt="Sample Text">
			</div>
		</div>
	</section>
	<!-- /home-shop -->



	<section class="home-social wrapper">
		<h1><span>Social Media</span></h1>
		<ul class="home-social-icons">
			<li class="fb"><a href="https://www.facebook.com/GraziaProducts" target="_blank"></a></li>
			<li class="twitter"><a href="https://twitter.com/GraziaProducts" target="_blank"></a></li>
			<li class="pinterest"><a href="http://www.pinterest.com/graziaproducts/" target="_blank"></a></li>
			<li class="instagram"><a href="#"></a></li>
		</ul>
		<?php
			if (function_exists('social_media_mashup'))
				social_media_mashup(12);
			?>
	</section>
	<!-- /home-social -->



	
	<section class="modal">
		<script type="text/javascript">
			//<![CDATA[
			if (typeof newsletter_check !== "function") {
				window.newsletter_check = function (f) {
				    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
				    if (!re.test(f.elements["ne"].value)) {
				        alert("The email is not correct");
				        return false;
				    }
				    if (f.elements["ny"] && !f.elements["ny"].checked) {
				        alert("You must accept the privacy statement");
				        return false;
				    }
				    return true;
				}
			}
			//]]>
		</script>
		<div class="newsletter newsletter-subscription">
			<a href="#" class="close-newsletter"></a>
			<form method="post" action="http://vimle.com/test/grazia/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">

				<h1>Sign up for our newsletter</h1>
				<p><b>Stay up to date with out latest products and offers.</b><br>Privacy policy: We hate spam and promise to keep your email address safe.</p>
				<div class="clear">
					<div class="column-9">
						<input class="newsletter-email" type="email" name="ne" size="30" placeholder="EMAIL" required>
					</div>
					<div class="column-3">
						<input class="newsletter-submit" type="submit" value="Submit"/>
					</div>
				</div>

			</form>
		</div>
	</section>
	<!-- /news-letter -->




	<?php /*
	<!-- section -->
		<section>
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<?php comments_template( '', true ); // Remove if you don't want comments ?>
					<br class="clear">
					<?php edit_post_link(); ?>
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
	*/ ?>
</main>
<?php get_footer(); ?>