<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estet-karniz
 */

?>

<section class="no-results not-found text-center min-h-[240px] py-3">
    <div class="container">
        <div class="row">
            <header class="page-header mb-5">
                <h1 class="page-title uppercase text-2xl sm:text-5xl font-extrabold text-white-900">Ничего не найдено</h1>
            </header>

            <div class="page-content">
                <?php
                if ( is_home() && current_user_can( 'publish_posts' ) ) :

                    printf(
                        '<p>' . wp_kses(
                        /* translators: 1: link to WP admin new post page. */
                            __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'estet-karniz' ),
                            array(
                                'a' => array(
                                    'href' => array(),
                                ),
                            )
                        ) . '</p>',
                        esc_url( admin_url( 'post-new.php' ) )
                    );

                elseif ( is_search() ) :
                    ?>

                    <p>Извините, но ничего не соответствует вашим поисковым запросам. Попробуйте еще раз с другими ключевыми словами.</p>
                    <?php
                    get_search_form();

                else :
                    ?>

                    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'estet-karniz' ); ?></p>
                    <?php
                    get_search_form();

                endif;
                ?>
            </div><!-- .page-content -->
        </div>
    </div>
</section><!-- .no-results -->
