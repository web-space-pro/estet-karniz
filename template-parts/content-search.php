<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estet-karniz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-10'); ?>>
    <div class="container">
        <div class="row">
            <div class="w-full">
                <div class="entry-header text-2xl sm:text-3xl mb-5">
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                </div>

                <?php //estet_karniz_post_thumbnail(); ?>

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->

                <footer class="entry-footer">
                    <?php //estet_karniz_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
