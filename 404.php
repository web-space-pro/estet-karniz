<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package estet-karniz
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found text-center min-h-[240px] py-3 flex items-center">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <h1 class="text-8xl sm:text-9xl leading-none uppercase opacity-5 font-black">404</h1>
                        <h2 class="uppercase text-2xl sm:text-5xl font-extrabold text-white-900">Упс! Эта страница не найдена.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="page-content mt-10">
                        <p class="text-xl">Похоже, в этом месте ничего не найдено. Может быть, попробуйте поиск?</p>
                        <div class="mt-5">
                            <?php get_search_form(); ?>
                        </div>
                    </div><!-- .page-content -->
                </div>
            </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
