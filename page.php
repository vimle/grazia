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
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
		</main>
	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
