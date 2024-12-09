<?php
    if ( function_exists('get_field') ) {
        $mark_title  = get_sub_field('mark_title');
        $image  = get_sub_field('image');
        $title  = get_sub_field('title');
        $small_title  = get_sub_field('small_title');
        $contactform  = get_sub_field('contactform');
    }
?>

<section id="contact" class="pt-16 relative">
    <div class="mb-5 py-4 sm:py-6 px-5 sm:px-14 xl:pr-[8.5rem] z-10 relative bg-white-900 w-[90%] sm:w-[55%] text-black-800 uppercase font-black text-center md:text-right text-xl sm:text-4xl xl:text-[2.6rem] 2xl:text-5xl rounded-br-[106px] rounded-tr-[106px]">
        <div><?= $mark_title;?></div>
    </div>
    <div class="container">
        <div class="flex w-full flex-row space-x-10">
            <div class="w-full sm:w-4/5 md:w-1/2 relative z-10">
                <p class="text-3xl sm:text-[40px] font-extralight uppercase leading-none"><?= $title;?></p>
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
