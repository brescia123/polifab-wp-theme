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
    <?php
    if (is_page_template('page-templates/equipment-page.php')): ?>

		<?php else : ?>
					<?php
					    the_content(); 
				    ?>
		    <?php
    endif; ?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
        <?php
        edit_post_link(__('Edit', 'twentytwelve'), '<span class="edit-link">', '</span>'); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->