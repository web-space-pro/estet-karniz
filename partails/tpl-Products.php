<?php
if ( function_exists('get_field') ) {
    $product_list  = get_sub_field('product_list');
    $title  = get_sub_field('title');
}
?>
<section id="services" class="pt-10 sm:pt-16 pt-10 pb-16 sm:pb-24 bg-white-900">
    <div class="mb-16 lg:mb-24 bg-black-800 py-4 sm:py-6 px-5 sm:px-14 w-[90%] sm:w-[55%] text-white-900 uppercase font-black text-center md:text-right text-xl sm:text-3xl xl:text-5xl rounded-br-[106px] rounded-tr-[106px]">
        <h2><?=$title;?></h2>
    </div>
    <div class="container text-black-800">
        <div class="grid grid-cols-1 min-[400px]:grid-cols-2   md:grid-cols-3 gap-x-4 sm:gap-x-7 gap-y-10 md:gap-y-20">
            <?php if( $product_list ): ?>
                <?php foreach( $product_list as $featured_post ):
                    $permalink = get_permalink( $featured_post->ID );
                    $title = get_the_title( $featured_post->ID );
                    $img    = get_the_post_thumbnail_url($featured_post->ID);
                    $post_type = get_post_type($featured_post->ID);
                    ?>
                        <figure class="group/item rounded-xl p-4 sm:p-8 border border-white-300 text-center relative transition ease-in-out duration-500  hover:shadow-card">
                        <a class="block hover:text-black-700" href="<?php echo esc_url( $permalink ); ?>" target="_self">
                            <div class="mb-3 -mt-8 sm:-mt-12 md:-mt-16">
                                <div class="w-full h-32 sm:w-50 sm:h-32 md:w-48 md:h-48 px-2 bg-white-900 m-auto">
                                    <img class="w-full h-full object-contain object-top" src="<?=$img;?>" alt="<?=the_title()?>">
                                </div>
                            </div>
                            <div class="relative mb-2 sm:mb-0">
                                <h2 class="leading-tight uppercase text-sm sm:text-base md:text-xl xl:text-2xl text-black-700"><?php echo esc_html( $title ); ?></h2>
                            </div>
                            <div class="md:invisible md:translate-y-2 group-hover/item:visible group-hover/item:translate-y-0 transition ease duration-500 absolute  left-0 right-0 -bottom-2.5">
                                <a class="uppercase text-xs sm:text-sm md:text-xl bg-bg-link text-white-900 hover:text-white-900 rounded-3xl px-5 py-1 sm:py-2" href="<?php echo esc_url( $permalink ); ?>">Подробнее</a>
                            </div>
                        </a>
                    </figure>
                  <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>