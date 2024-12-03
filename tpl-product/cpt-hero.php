<?php
if ( function_exists('get_field') ) {
    $general_photo  = get_sub_field('general_photo');
    $slider  = get_sub_field('slider');
    $title  = get_sub_field('title');
    $small_title = get_sub_field('small_title');
    $sity  = get_sub_field('sity');
}
?>

<section class="relative bg-black-800">
    <div class="absolute w-full h-full top-0">
        <div class="swiper productSlider h-[440px] after:content[''] sm:after:content after:z-[1] after:bg-black-900/70 after:absolute after:top-0 after:w-full after:h-full">
            <div class="swiper-wrapper">
                <?php foreach( $slider as $item ): ?>
                <div class="swiper-slide">
                    <div>
                        <img width="100%" height="100%" src="<?= $item['url'];?>" alt="<?= $item['alt'];?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="z-10 relative pt-24">
        <div class="container">
            <div class="flex w-full flex-col md:flex-row md:space-x-5 lg:space-x-10">
                <div class="w-full  md:w-7/12">
                    <h3 class="text-2xl min-[400px]:text-3xl min-[475px]:text-5xl uppercase font-light"><?= $small_title;?></h3>
                    <h1 class="text-5xl md:text-7xl lg:text-8xl uppercase font-black "><?= $title;?></h1>
                    <h4 class="text-2xl sm:text-3xl uppercase font-light"><?= $sity;?></h4>
                    <div class="relative mt-10  md:mr-4 lg:mr-10 bg-black-800 py-10 pr-4 xl:pr-16 rounded-br-[50px] rounded-tr-[50px]">
                        <div class="text-base text-justify after:content[''] sm:after:content after:z-[1] after:bg-black-800 after:absolute after:top-0 after:-left-full after:w-full after:h-full">
                            <?=get_the_content();?>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-5/12 hidden md:block">
                    <?php if( isset($general_photo) && !empty($general_photo)): ?>
                    <figure class="max-w-[440px] w-full max-h-[440px] m-auto md:ml-auto h-full rounded-[50px] overflow-hidden">
                        <img class="w-full h-full object-cover object-center" src="<?=$general_photo['url']?>" alt="<?=$general_photo['alt']?>">
                    </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>