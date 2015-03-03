<?php

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" class="content-equip-summ" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<div class="entry-content">				
				<h2>Equipment List</h2>
				<?php $fields = get_field_object('field_54b5053a6447d');
					$categories = $fields['choices'];
				?>
				<?php foreach ($categories as $category ) {
					echo '<ul><h3>';
					echo $category;
					echo '</h3>';
					$category_pages = get_posts(array(
						'posts_per_page' => -1,
					    'post_type' => 'page',
					    'meta_key' => 'category',
						'meta_value' => $category
					));
					echo '<ul>';
						foreach ($category_pages as $page) {
							echo '<li>';
							// Add the link
							echo '<a href="'.get_permalink($page->ID).'">'.$page->post_title.'</a></li>';
						}
					echo '</ul>';
				echo '</ul>';
				}
				?>
			</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>