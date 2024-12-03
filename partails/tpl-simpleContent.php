<?php
if ( function_exists('get_field') ) {
    $image  = get_sub_field('image');
    $content  = get_sub_field('content');
}
?>


<section class="pt-5 md:mt-16 pb-3 md:pb-8">
    <div class="container">
        <div class="row">
            <div class="w-ful">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-14">
                    <div>
                        <figure class="h-full h-[260px] xs:h-[280px] md:h-[360px] md:max-h-[360px] xl:h-[440px] xl:max-h-[440px] rounded-[50px] overflow-hidden">
                            <img class="w-full h-full object-cover object-center" src="<?= $image['url'];?>" alt="<?= the_title();?>">
                        </figure>
                    </div>
                    <div class="text-base pt-2 text-justify leading-tight font-normal *:mb-4">
                        <?= $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>