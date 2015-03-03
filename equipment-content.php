<?php
/**
* The template used for displaying page content in page.php
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/
?>
<article id="post-<?php
the_ID(); ?>" <?php
post_class(); ?>>
<header class="entry-header">
    <?php
    if (!is_page_template('page-templates/front-page.php')): ?>
    <?php
    the_post_thumbnail(); ?>
    <?php
    endif; ?>
    <h1 class="entry-title"><?php
    the_title(); ?></h1>
</header>
<div class="entry-content">
		<div class="equip-content">   
			<div class="equip-elem equip-top">		 	
				<div class="equip-sub-elem" id="equip-img">				
					<?php
					    the_content(); 
				    ?>
					<?php 

						$image = get_field('equipment_image');
						$size = array(280,280); // (thumbnail, medium, large, full or custom size)

						if( $image ) {

							echo wp_get_attachment_image( $image, $size );

						} else {
							//Image Placeholder
							echo '<img src="http://placehold.it/280x280">';
						}

					?>
				</div>
				<div class="equip-sub-elem"\>
					<div class="equip-sub-elem" id="short-desc">
						<?php the_field('short_description'); ?>
					</div>		
					<div class="equip-sub-elem">
						<label>Manufacturer:</label>
						<div><?php the_field('manufacturer'); ?></div>
					</div>
					<div class="equip-sub-elem">
						<label>Website:</label>
						<div><a href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a></div>
					</div>
					<div class="equip-sub-elem">
						<label>Year:</label>
						<div><?php the_field('year'); ?></div> 
					</div>
					<div class="equip-sub-elem">
						<label>Condition:</label>
						<div><?php the_field('condition'); ?></div>
					</div>
				</div>
			</div>
			<div class="equip-elem equip-middle">		
				<div class="equip-sub-elem">
					<label>Referee:</label>
					<div><?php the_field('referee'); ?></div></div>
				<div class="equip-sub-elem">
					<label>Access:</label>
					<div><?php the_field('access'); ?></div>
				</div>
				<div class="equip-sub-elem">
					<label>Location:</label>
					<div><?php the_field('location'); ?></div>
				</div>
				<?php 
				if( get_field('location') ):
					echo '<div class="equip-sub-elem">';
					echo '<label>Location:</label><div>';
					the_field('location'); 
					echo '</div></div>';
				endif
				?>
			</div>
			<div class="equip-elem equip-bottom">			
				<?php 
				if( get_field('description') ):
					echo '<div class="equip-sub-elem">';
					echo '<label>Description:</label><div>';
					the_field('description'); 
					echo '</div></div>';
				endif
				?>
				<?php 
				if( get_field('working_principle') ):
					echo '<div class="equip-sub-elem">';
					echo '<label>Working principle:</label><div>';
					the_field('working_principle'); 
					echo '</div></div>';
				endif
				?>
				<?php 
				if( get_field('specification') ):
					echo '<div class="equip-sub-elem">';
					echo '<label>Specification:</label><div>';
					the_field('specification'); 
					echo '</div></div>';
				endif
				?>
				<?php 
				if( get_field('notes') ):
					echo '<div class="equip-sub-elem">';
					echo '<label>Notes:</label><div>';
					the_field('notes'); 
					echo '</div></div>';
				endif
				?>
				<?php
				if( get_field('download') ):
					echo '<div class="equip-sub-elem">';
					echo '<label>Download:</label>';

					$attachment_id = get_field('download');
					$url = wp_get_attachment_url( $attachment_id );
					$title = get_the_title( $attachment_id );

					$protected_content .= '<div><a href='.$url.'>'.$title.'</a></div></div>';
					echo do_shortcode('[content_protector password="'
							.get_field('protected_contents_password').'" identifier="'.get_field('protected_contents_password').'-id"]'
							.$protected_content.'[/content_protector]');
				endif;
				?>
			</div>
		</div>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
        <?php
        edit_post_link(__('Edit', 'twentytwelve'), '<span class="edit-link">', '</span>'); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->