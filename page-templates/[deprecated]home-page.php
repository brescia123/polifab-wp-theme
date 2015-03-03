<?php
/*
Template Name: Home Page
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				


				<div id="home-wall">
					<!-- 152px * 240px -->
				    <div id="img-cont-1" class="img-cont">
				    	<?php 

							$image = get_field('image_1');
							$size = array(152,240); // (thumbnail, medium, large, full or custom size)

							if( $image ) {
								echo wp_get_attachment_image( $image, 'image_1', true );
							} else {
								//Image Placeholder
								echo '<img src="http://placehold.it/152x240">';
							}

						?>
				    </div>
				    <!-- 472px * 240px -->
				    <div id="img-cont-2" class="img-cont">
				    	<?php 

							$image = get_field('image_2');
							$size = array(472,240); // (thumbnail, medium, large, full or custom size)

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							} else {
								//Image Placeholder
								echo '<img src="http://placehold.it/472x240">';
							}

						?>
				    </div>
				    <!-- 312px * 240px -->
				    <div id="img-cont-3" class="img-cont">
				    	<?php 

							$image = get_field('image_3');
							$size = array(312,240); // (thumbnail, medium, large, full or custom size)

							if( $image ) {
								echo wp_get_attachment_image( $image, $size, true );
							} else {
								//Image Placeholder
								echo '<img src="http://placehold.it/312x240">';
							}

						?>
				    </div>
				    <!-- 152px * 240px -->
				    <div id="img-cont-4" class="img-cont">
				    	<?php 

							$image = get_field('image_4');
							$size = array(152,240); // (thumbnail, medium, large, full or custom size)

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							} else {
								//Image Placeholder
								echo '<img src="http://placehold.it/152x240">';
							}

						?>
				    </div>
				    <!-- 312px * 240px -->
				    <div id="img-cont-5" class="img-cont">
				    	<?php 

							$image = get_field('image_5');
							$size = array(312,240); // (thumbnail, medium, large, full or custom size)

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							} else {
								//Image Placeholder
								echo '<img src="http://placehold.it/312x240">';
							}

						?>				    
					</div>
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