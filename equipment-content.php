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
				<div class="equip-sub-elem">	
					<?php 
					if( get_field('short_description') ):
						echo '<div class="equip-sub-elem" id="short-desc">';
						echo '<label></label><div>';
						the_field('short_description'); 
						echo '</div></div>';
					endif
					?>			
					<?php 
					if( get_field('manufacturer') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>Manufacturer:</label><div>';
						the_field('manufacturer'); 
						echo '</div></div>';
					endif
					?>		
					<?php 
					if( get_field('website') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>Website:</label><div>';
						echo '<a href="'; the_field('website'); echo '">'; the_field('website'); echo '</a>';
						echo '</div></div>';
					endif
					?>		
					<?php 
					if( get_field('year') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>ear:</label><div>';
						the_field('year'); 
						echo '</div></div>';
					endif
					?>		
					<?php 
					if( get_field('condition') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>Condition:</label><div>';
						the_field('condition'); 
						echo '</div></div>';
					endif
					?>
					<?php 
					if( get_field('referee') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>Referee:</label><div>';
						the_field('referee'); 
						echo '</div></div>';
					endif
					?>
					<?php 
					if( get_field('access') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>Access:</label><div>';
						the_field('access'); 
						echo '</div></div>';
					endif
					?>
					<?php 
					if( get_field('location') ):
						echo '<div class="equip-sub-elem">';
						echo '<label>Location:</label><div>';
						the_field('location'); 
						echo '</div></div>';
					endif
					?>
				</div>
			</div>
			<div class="equip-elem equip-middle">		
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