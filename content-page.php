<?php
/**
 * Template used for displaying page content in page.php
 *
 * @package Aplos
 * @since Aplos 1.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php aplos_post_thumbnail() ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(array( 'before' => '<div class="page-links">' . __('Pages:', 'aplos'), 'after' => '</div>' )); ?>
        <?php edit_post_link(__('Edit', 'aplos'), '<span class="edit-link">', '</span>'); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

