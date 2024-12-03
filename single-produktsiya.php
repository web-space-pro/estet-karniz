<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package estet-karniz
 */

get_header();

?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
           if ( have_rows('production_cpt' )  ) :
            while( have_rows('production_cpt') )
            {
                the_row();
                $layout = get_row_layout();
                $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-product" . DIRECTORY_SEPARATOR ."cpt-{$layout}.php";
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

			//get_template_part( 'template-parts/content', get_post_type() );
//
		endwhile;
        if (function_exists('get_field')) {
            $block_contacts = get_field('block_contacts', 'options');
            if(!empty($block_contacts)){
                $mark_title  = $block_contacts['bc_mark_title'];
                $image  = $block_contacts['bc_image']['url'];
                $title  = $block_contacts['bc_title'];
                $small_title  = $block_contacts['bc_small_title'];
                $contactform  = $block_contacts['bc_contactform'];
            }
        }

        ?>
        <?php if(isset($block_contacts) && !empty($block_contacts)): ?>

            <section id="contact" class="pt-16 relative">
            <div class="mb-5 py-4 sm:py-6 px-5 sm:px-14 xl:pr-[8.5rem] z-10 relative bg-white-900 w-[90%] sm:w-[55%] text-black-800 uppercase font-black text-center md:text-right text-xl sm:text-4xl xl:text-[2.6rem] 2xl:text-5xl rounded-br-[106px] rounded-tr-[106px]">
                <h2><?= $mark_title;?></h2>
            </div>
            <div class="container">
                <div class="flex w-full flex-row space-x-10">
                    <div class="w-full sm:w-4/5 md:w-1/2 relative z-10">
                        <h3 class="text-3xl sm:text-[40px] font-extralight uppercase leading-none"><?= $title;?></h3>
                        <p class="font-medium text-2xl sm:text-[32px] uppercase leading-normal"><?= $small_title;?></p>
                        <div class="sm:w-4/5 mt-10 mb-10">
                            <?= do_shortcode('[contact-form-7 id="'.$contactform.'"]'); ?>
                        </div>
                    </div>
                    <figure class="w-4/5 sm:w-1/2  rounded-tl-[3.5rem] rounded-bl-[3.5rem] overflow-hidden absolute right-0 top-0 bottom-0 after:content[''] sm:after:content after:z-[1] after:bg-black-900/30 after:absolute after:top-0 after:w-full after:h-full">
                        <img class="h-full object-cover" src="<?= $image;?>" alt="<?php bloginfo('name'); ?>">
                    </figure>
                </div>
            </div>
        </section>

        <?php endif; ?>
	</main>

<?php
//get_sidebar();
get_footer();
