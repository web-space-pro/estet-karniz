<?php
    if ( function_exists('get_field') ) {
        $title  = get_sub_field('title');
        $title_two  = get_sub_field('title_two');
        $mask_title  = get_sub_field('mask_title');
        $content  = get_sub_field('content');
        $image  = get_sub_field('image');
    }
?>
<?php if(!empty($title) || !empty($content) ) : ?>
<section id="about_us" class="pt-10 sm:pt-16">
    <?php if(!empty($title)) : ?>
        <div class="mb-16 lg:mb-24 bg-white-900 py-4 sm:py-6 px-5 sm:px-14 w-[90%] sm:w-[55%] text-black-800 uppercase font-black text-center md:text-right text-xl sm:text-3xl lg:text-4xl xl:text-5xl leading-tight rounded-br-[106px] rounded-tr-[106px]">
            <h2><?= $title;?></h2>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="flex w-full flex-col-reverse lg:flex-row lg:space-x-10">
            <?php if(!empty($image)) : ?>
                <div class="w-full lg:w-1/2">
                    <figure class="mt-10 lg:mt-0 rounded-tl-[55px] rounded-br-[55px]  sm:rounded-tl-[150px] sm:rounded-br-[150px] overflow-hidden">
                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                    </figure>
                </div>
            <?php endif; ?>

            <div class="w-full lg:w-1/2">

                <?php if(!empty($mask_title)) : ?>
                    <div class="-mt-5 text-[5rem] sm:text-9xl leading-none uppercase opacity-5 font-black"><?=$mask_title;?></div>
                <?php endif; ?>

                <?php if(!empty($title_two)) : ?>
                    <h1 class="text-5xl font-bold uppercase -mt-12"><?= $title_two;?></h1>
                <?php endif; ?>

                <?php if(!empty($content)) : ?>
                    <div class="text-sm mt-3 *:mb-4"><?= $content;?></div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php endif;?>