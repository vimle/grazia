<?php
/*
	Template Name: Blog Template
*/
?>
<?php get_header(); ?>

<?php 
	global $page;
	$category = get_post_custom_values('Category', $page->ID);
	$id = get_cat_ID($category[0]);
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array( 'cat' => $id, 'orderby' => 'post_date', 'order' => 'DESC', 'paged' => $paged,);
	$myposts = new WP_Query( $args );		
?>
<div class="wrapper">
	<div class="item-list">
		<ul>
			<?php while ( $myposts->have_posts() ) {
				$myposts->the_post(); ?>
				<li>
					<a href = "<?php echo post_permalink($post->ID);?>"><h1 class="blog-title"><?php echo $post->post_title; ?></h1></a>
					<div class = "author-data">
						<a href = "<?php echo get_author_posts_url($post->post_author); ?>"><span class = "author"><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></span></a> <span class="date"><?php echo get_the_time( 'F j, Y', $post->ID ); ?></span>
					</div>
					<div class = "main-item-wrap">
						<div class = "img-wrap">
							<img src = "<?php echo get_first_image_url(); ?>">
						</div>
						<div class = "text">
							<?php echo return_the_excerpt_max_charlength(240);?>
							<div class="comment-count">
								<?php commentCount(); ?>
							</div>
						</div>
						<div class = "clear"></div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
	<center>
		<div class = "pageLinks">
			<?php
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $myposts->max_num_pages,
					'prev_text'    => __('«'),
					'next_text'    => __('»')
				) );
			?>
		</div>
	</center>
	
	<?php get_sidebar(); ?>
</div>

<div class = "clear"></div>

<?php get_footer(); ?>