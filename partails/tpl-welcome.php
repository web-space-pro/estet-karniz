<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $subtittle  = get_sub_field('subtittle');
    $sity  = get_sub_field('welcome_sity');
    $description = get_sub_field('description');
    $link  = get_sub_field('Link');

    $general_photo  = get_sub_field('photo');
    $slider  = get_sub_field('slider_welcomr');

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
                    <h1 class="text-5xl md:text-7xl lg:text-8xl uppercase font-black ">
                        <div class="text-2xl min-[400px]:text-3xl min-[475px]:text-5xl uppercase font-light"><?= $subtittle;?></div>
                        <?= $title;?>
                    </h1>
                    <h4 class="text-2xl sm:text-3xl uppercase font-light"><?= $sity;?></h4>
                    <div class="relative mt-10  md:mr-4 lg:mr-10 bg-black-800 py-10 pr-4 xl:pr-16 rounded-br-[50px] rounded-tr-[50px]">
                        <div class="text-base text-justify after:content[''] sm:after:content after:z-[1] after:bg-black-800 after:absolute after:top-0 after:-left-full after:w-full after:h-full">
                            <div class="mb-10">
                                <?=$description;?>
                            </div>
                            <?php if( isset($link) && !empty($link['url'])): ?>
                                 <a class="px-5 py-2.5 md:py-5 md:max-w-[340px] md:w-full text-base md:text-xl text-center  inline-block uppercase relative  rounded-[50px] transition ease-in-out duration-500 bg-bg-gradient hover:shadow-lg hover:text-white-900 btn" href="<?=$link['url'];?>" target="<?=$link['target'];?>"><?=$link['title'];?></a>
                            <?php endif; ?>
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
