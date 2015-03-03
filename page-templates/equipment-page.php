<?php
/*
Template Name: Equipment
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'equipment', 'content' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php $field = get_field_object('category');
				$categories = $field['choices'];
		?>
		<div class="equipment-list">
			<?php foreach ($categories as $category ) {
				echo '<div class="category">';
					echo '<h4><i class="fa fa-caret-right"></i><a>'.$category.'</a></h4>';
					$category_pages = get_posts(array(
					    'post_type' => 'page',
					    'meta_key' => 'category',
						'meta_value' => $category
					));
					echo '<ul class="sublist">';
						foreach ($category_pages as $page) {
							echo '<li '; 
							// Add .active if the post is the selected one 
							if ( get_the_ID() == $page->ID ) { echo 'class="active" '; }; 
							echo '>';
							// Add the link
							echo '<a href="'.get_permalink($page->ID).'">'.$page->post_title.'</a>';
						}
					echo '</ul>';
				echo '</div>';
			}
			?>
		</div>
	</div><!-- #secondary -->
<?php get_footer(); ?>