<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estet-karniz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="text-[22px] md:text-4xl lg:text-5xl uppercase font-black "><?php the_title(); ?></h1>

	<div class="entry-content mt-16 md:mt-24">
		<?php the_content(); ?>
	</div>
</article>
