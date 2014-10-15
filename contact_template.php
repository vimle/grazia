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
				<h1><?php the_title(); ?></h1>
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
					<ul>
						<li><img src="http://vimle.com/test/grazia/wp-content/uploads/2014/10/icon-location.png">8605 Santa Monica Blvd, Unit 18030, Los Angeles, CA 90069, USA</li>
						<li><img src="http://vimle.com/test/grazia/wp-content/uploads/2014/10/icon-phone.png">123.236.3214</li>
						<li><img src="http://vimle.com/test/grazia/wp-content/uploads/2014/10/icon-email.png">info@grazia.com</li>
					</ul>
					
					<div class="social-icons">
					
					</div>
			</div>
			
			<div style="clear:both"></div>
		</main>
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
