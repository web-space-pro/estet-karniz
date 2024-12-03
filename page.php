<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estet-karniz
 */

get_header();
?>



    <?php if (have_posts() ): ?>
        <main class="bg-black-800">
          <?php while ( have_posts() ) : the_post() ; ?>
                <?php if ( have_rows('components' )  ) :
                        while( have_rows('components') )
                           {
                             the_row();
                             $layout = get_row_layout();
                             $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "partails" . DIRECTORY_SEPARATOR ."tpl-{$layout}.php";
                             if( file_exists( $inclusion ) )
                                {
                                  include( $inclusion );
                                }
                           }
                             else: ?>
                         <section class="componentInfo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="componentInfo__box">
                                        <p>Вы не создали не одного блока! Перейдите в редактор страницы для добавление нового блока!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif;
          endwhile; ?>
           </main>
   <?php  endif ?>





<?php
get_sidebar();
get_footer();
