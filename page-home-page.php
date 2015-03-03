<?php
/**
 * Template for the home page
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div id="home-page-content">
				<?php 
				echo do_shortcode("[metaslider id=445]"); 
				?>
				<div id="home-page-text">
					<?php
					$text = get_field('home_page_text');
					echo $text;
					?>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>